<?php

namespace App\Imports;

use App\Models\Lens;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class LensesImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'CYLINDRICAL LENSES PLUS' => new LensSheetImport(),
            'CYLINDRICAL LENSES MINUS' => new LensSheetImport(),
            'BIFOCAL BLUE CUT' => new LensSheetImport(),
            // Add all your sheet names here
        ];
    }
}

class LensSheetImport implements ToModel, WithHeadingRow, WithChunkReading
{
    private $importedCount = 0;
    private $skippedCount = 0;

    public function model(array $row)
    {
        // Skip if header row or empty row
        if (isset($row['power']) && $row['power'] === 'Power') {
            return null;
        }

        // Get values directly using known column names
        $power = $row['power'] ?? null;
        $pairs = $row['pairs'] ?? null;

        // Skip if required fields are missing or empty
        if (empty($power) || empty($pairs)) {
            $this->skippedCount++;
            return null;
        }

        // Clean and validate pairs value
        $quantity = $this->convertPairsToQuantity($pairs);
        if ($quantity === null) {
            $this->skippedCount++;
            return null;
        }

        $this->importedCount++;

        return new Lens([
            'name' => $this->cleanPower($power),
            'quantity' => $quantity,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function cleanPower($power): string
    {
        // Remove any prefixes and trim
        return trim(preg_replace('/^(PL|pl|Pl|pL)\s*\/?\s*/', '', $power));
    }

    private function convertPairsToQuantity($pairs): ?int
    {
        // Handle decimal values (like 1.5 pairs)
        if (is_numeric($pairs)) {
            return (int) ceil((float)$pairs * 2); // Round up to nearest whole item
        }
        
        // Handle "x" or other non-numeric values
        if (strtolower($pairs) === 'x') {
            return null; // Skip invalid entries
        }
        
        // Handle "pairs" text
        if (preg_match('/(\d+)\s*pairs?/i', $pairs, $matches)) {
            return (int)$matches[1] * 2;
        }
        
        // Try to extract any number
        if (preg_match('/(\d+)/', $pairs, $matches)) {
            return (int)$matches[1] * 2;
        }
        
        return null;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function getImportResults(): array
    {
        return [
            'imported' => $this->importedCount,
            'skipped' => $this->skippedCount,
        ];
    }
}