<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ChoixExport implements FromView/* FromCollection */
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     //

    // }
    /**
     *  @return View
     */  
    public function view(): View
    {
        return view('test-table');
    }

}
