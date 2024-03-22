<?php

namespace App\Http\Controllers;


use App\Models\Candidature;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    //
    public function generatePdf()
    {
        $candidature = Candidature::find(1);
        $pdf = PDF::loadView('etudiant.fiche', compact('candidature'));
        return $pdf->stream('inscription.pdf', array('Content-Disposition' => 'inline'));
    }


}
