<?php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AdditionalDataExport implements WithEvents
{
    private $data;
    private $sheetData;

    public function __construct($data, $sheetData)
    {
        $this->data = $data;
        $this->sheetData = $sheetData;
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->setCellValue('A2', $this->data['nom_f1']);
/*                 $event->sheet->setCellValue('B2', $this->data['value2']);
 */                // Fill in other values as needed
            },
        ];
    }
}
