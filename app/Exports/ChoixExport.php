<?php
namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ChoixExport implements WithMultipleSheets
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sheets(): array
    {
        $sheets = [];

        // Load the template Excel file with macros
        $templatePath = public_path('template_with_macro.xlsm');
        $spreadsheet = IOFactory::load($templatePath);

        // Get the sheets from the template file
        $sheetsData = $spreadsheet->getAllSheets();

        // First sheet (Candidates)
        $sheets[] = new CandidatesExport($this->data['candidates'], $sheetsData[0]);

        // Second sheet (Additional data)
        $sheets[] = new AdditionalDataExport($this->data, $sheetsData[1]);

        return $sheets;
    }
}
