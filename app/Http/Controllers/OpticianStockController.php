<?php

namespace App\Http\Controllers;

use App\Models\StockCategory;
use App\Models\StockRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

/**
 * Optician stock book: categories (stock cards) and their records with a running balance.
 */
class OpticianStockController extends Controller
{
    private const PER_PAGE = 50;

    public function index()
    {
        $categories = StockCategory::withSummary()->orderBy('name')->get();
        $balances = $categories->mapWithKeys(fn ($category) => [$category->id => $category->currentBalance()]);

        return view('optician.stock.index', compact('categories', 'balances'));
    }

    public function storeCategory(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:stock_categories,name',
        ], [
            'name.required' => 'Enter a category name.',
            'name.unique' => 'A category with this name already exists.',
        ]);

        $category = StockCategory::create($data);

        return redirect(route('optician.stock.show', $category))
            ->with('success', "Category \"{$category->name}\" created. Add its first record below.");
    }

    public function updateCategory(Request $request, StockCategory $category)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('stock_categories', 'name')->ignore($category->id)],
        ], [
            'name.required' => 'Enter a category name.',
            'name.unique' => 'A category with this name already exists.',
        ]);

        $category->update($data);

        return redirect()->back()->with('success', "Category renamed to \"{$category->name}\".");
    }

    public function destroyCategory(StockCategory $category)
    {
        if ($category->records()->exists()) {
            return redirect()->back()->withErrors([
                'category' => "\"{$category->name}\" still has records. Delete its records first; only empty categories can be deleted.",
            ]);
        }

        $category->delete();

        return redirect(route('optician.stock'))->with('success', "Category \"{$category->name}\" deleted.");
    }

    public function show(StockCategory $category)
    {
        $records = $category->orderedRecords()->paginate(self::PER_PAGE);

        return view('optician.stock.show', [
            'category' => $category,
            'records' => $records,
            'currentBalance' => $category->currentBalance(),
        ]);
    }

    public function storeRecord(Request $request, StockCategory $category)
    {
        $data = $this->validateRecord($request);
        if ($response = $this->rejectEmptyQuantities($data)) {
            return $response;
        }

        DB::transaction(function () use ($category, $data) {
            $category->records()->create($data + ['recorded_by' => auth()->user()->name]);
            $category->recalculateBalances();
        });

        // Show the last page, where a newly dated record usually lands.
        $lastPage = max(1, (int) ceil($category->records()->count() / self::PER_PAGE));

        return redirect(route('optician.stock.show', ['category' => $category, 'page' => $lastPage]))
            ->with('success', 'Record added. Balance updated.');
    }

    public function updateRecord(Request $request, StockCategory $category, StockRecord $record)
    {
        abort_unless($record->stock_category_id === $category->id, 404);

        $data = $this->validateRecord($request);
        if ($response = $this->rejectEmptyQuantities($data)) {
            return $response;
        }

        DB::transaction(function () use ($category, $record, $data) {
            $record->update($data);
            $category->recalculateBalances();
        });

        return redirect()->back()->with('success', 'Record updated. Balances recalculated.');
    }

    public function destroyRecord(StockCategory $category, StockRecord $record)
    {
        abort_unless($record->stock_category_id === $category->id, 404);

        DB::transaction(function () use ($category, $record) {
            $record->delete();
            $category->recalculateBalances();
        });

        return redirect()->back()->with('success', 'Record deleted. Balances recalculated.');
    }

    private function validateRecord(Request $request): array
    {
        return $request->validate([
            'date' => 'required|date',
            'new_stock' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'patient_code' => 'nullable|string|max:255',
            'booklet_no' => 'nullable|string|max:255',
            'qty_in' => 'required|integer|min:0',
            'qty_out' => 'required|integer|min:0',
        ], [
            'date.required' => 'Enter the date.',
            'name.required' => 'Enter a name.',
            'qty_in.required' => 'Enter Qty In (use 0 if none).',
            'qty_in.integer' => 'Qty In must be a whole number.',
            'qty_in.min' => 'Qty In cannot be negative.',
            'qty_out.required' => 'Enter Qty Out (use 0 if none).',
            'qty_out.integer' => 'Qty Out must be a whole number.',
            'qty_out.min' => 'Qty Out cannot be negative.',
        ]);
    }

    private function rejectEmptyQuantities(array $data)
    {
        if ((int) $data['qty_in'] === 0 && (int) $data['qty_out'] === 0) {
            return redirect()->back()->withInput()->withErrors(['qty_in' => 'Enter a Qty In or Qty Out greater than 0.']);
        }

        return null;
    }
}
