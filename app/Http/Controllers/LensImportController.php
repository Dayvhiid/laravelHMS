<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\LensesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AllSheetsLensesImport;

class LensImportController extends Controller
{

    public function index(){
        return view('lensImportIndex');
    }

    
public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls,csv|max:10240'
    ]);

    try {
        $import = new LensesImport();
        Excel::import($import, $request->file('file'));

        // Get total results from all sheets
        $totalImported = 0;
        $totalSkipped = 0;
        
        foreach ($import->sheets() as $sheet) {
            $results = $sheet->getImportResults();
            $totalImported += $results['imported'];
            $totalSkipped += $results['skipped'];
        }

        return redirect()
            ->route('admin.demographics')
            ->with([
                'success' => "Successfully imported $totalImported lenses",
                'info' => "$totalSkipped rows were skipped"
            ]);

    } catch (\Exception $e) {
        return back()
            ->with('error', 'Import failed: ' . $e->getMessage())
            ->withInput();
    }
}

}
