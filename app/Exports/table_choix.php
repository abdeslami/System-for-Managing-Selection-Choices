<?php

namespace App\Exports;

use App\Models\Choix_classement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class table_choix implements FromView
{
    public function view(): View
    {
        $users=Choix_classement::with('candidature')->get();
        return view('admin.choix',compact('users'));
    }
}
