<?php

namespace App\Imports;

use App\Models\Lens;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Illuminate\Support\Str;

class LensesImport implements ToModel, WithHeadingRow, WithChunkReading, WithBatchInserts, SkipsEmptyRows, SkipsOnError
{
    private $importedCount = 0;
    private $skippedCount = 0;

    public function model(array $row)
    {
        // Normalize column names by removing numbers/dots
        $normalizedRow = [];
        foreach ($row as $key => $value) {
            $normalizedKey = strtolower(preg_replace('/[0-9.]+/', '', $key));
            $normalizedRow[$normalizedKey] = $value;
        }

        // Find power and pairs values using flexible matching
        $power = $this->findValue($normalizedRow, ['power', 'pwr', 'lenspower']);
        $pairs = $this->findValue($normalizedRow, ['pairs', 'pair', 'quantity', 'qty']);

        // Skip if required fields are missing
        if (empty($power) || empty($pairs)) {
            $this->skippedCount++;
            return null;
        }

        $this->importedCount++;

        return new Lens([
            'name' => $this->cleanPower($power),
            'quantity' => $this->convertPairsToQuantity($pairs),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function findValue(array $row, array $possibleKeys)
    {
        foreach ($possibleKeys as $key) {
            if (isset($row[$key]) && !empty($row[$key])) {
                return $row[$key];
            }
        }
        return null;
    }

    private function cleanPower($power): string
    {
        return trim(str_replace(['Power:', 'Pwr:', 'P:'], '', (string)$power));
    }

    private function convertPairsToQuantity($pairs): int
    {
        $pairs = strtolower((string)$pairs);
        
        if (str_contains($pairs, 'pair')) {
            return (int)filter_var($pairs, FILTER_SANITIZE_NUMBER_INT) * 2;
        }
        
        return (int)$pairs * 2;
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function batchSize(): int
    {
        return 500;
    }

    public function onError(\Throwable $e)
    {
        $this->skippedCount++;
    }

    public function getImportResults(): array
    {
        return [
            'imported' => $this->importedCount,
            'skipped' => $this->skippedCount,
        ];
    }
}