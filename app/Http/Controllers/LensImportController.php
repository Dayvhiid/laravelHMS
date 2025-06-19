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
        // Debugging: Log that we've reached the controller
        \Log::info('Import request received', ['file_exists' => $request->hasFile('file')]);
        
        $validated = $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv|max:10240'
        ]);

        // Debugging: Log validation passed
        \Log::info('Validation passed', ['file_name' => $request->file('file')->getClientOriginalName()]);

        try {
            $import = new LensesImport();
            $result = Excel::import($import, $request->file('file'));

            // Debugging: Log import completion
            \Log::info('Import completed', $import->getImportResults());

            return redirect()
                ->route('lenses.import.view')
                ->with([
                    'success' => 'Successfully imported ' . $import->getImportResults()['imported'] . ' lenses',
                    'skipped' => $import->getImportResults()['skipped'] . ' rows were skipped'
                ]);

        } catch (\Exception $e) {
            // Debugging: Log the error
            \Log::error('Import failed', ['error' => $e->getMessage()]);
            
            return back()
                ->with('error', 'Import failed: ' . $e->getMessage())
                ->withInput();
        }
    }

}
