<?php

// namespace App\Imports;

// use Illuminate\Support\Collection;
// use Maatwebsite\Excel\Concerns\ToCollection;

// class AllSheetsLensesImport implements ToCollection
// {
//     /**
//     * @param Collection $collection
//     */
//     public function collection(Collection $collection)
//     {
//         //
//     }
// }



namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class AllSheetsLensesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        // This will apply to all sheets automatically
        return [
            new LensesImport()
        ];
    }
}