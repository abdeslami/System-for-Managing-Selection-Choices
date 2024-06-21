<?php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CandidatesExport implements WithEvents
{
    private $candidates;
    private $sheetData;

    public function __construct($candidates, $sheetData)
    {
        $this->candidates = $candidates;
        $this->sheetData = $sheetData;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->setCellValue('A2', 'Candidate Name'); // Example header
                $row = 3;
                foreach ($this->candidates as $candidate) {
                    $event->sheet->setCellValue('A' . $row, $candidate->name);
                    // Fill in other candidate data as needed
                    $row++;
                }
            },
        ];
    }
}
