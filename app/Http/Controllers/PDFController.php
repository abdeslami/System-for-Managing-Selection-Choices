<?php

namespace App\Http\Controllers;


use App\Models\Candidature;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    //
    public function generatePdf()
    {
        $userId=Auth::user()->id;
        $candidature = Candidature::where('user_id',$userId)->first();
        $pdf = PDF::loadView('etudiant.fiche', compact('candidature'));
        if ($candidature) {
            
        return $pdf->stream('inscription.pdf', array('Content-Disposition' => 'inline'));
        }
    }


}
