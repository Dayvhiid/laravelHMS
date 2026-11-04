<?php

namespace App\Http\Controllers;

use App\Models\Treat;
use App\Models\Vital;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function index()
    {
        return view('pharmacy.search');
    }

    public function search(Request $request)
    {
        $searchText = (string) $request->query('query', '');

        $treatments = Treat::where('patient_id', $searchText)->get();

        $examinations = Vital::where('patient_code', $searchText)->orderByDesc('created_at')->orderByDesc('id')->get()
            ->map(fn ($vital) => [
                'date' => $vital->created_at,
                'sections' => $vital->examSectionsTaken($vital->pairedVital2()),
            ]);

        return view('pharmacy.results', compact('treatments', 'examinations', 'searchText'));
    }
}
