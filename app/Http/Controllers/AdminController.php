<?php

namespace App\Http\Controllers;

use App\Models\Condidature;
use App\Models\Diplome;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function afficheDonne(){
            $condidatures = Condidature::with('diplom')->get();
        
            // Pass the condidatures data to the view
            return view("admin.index", compact('condidatures'));
        }
        public function afficheDonneBase()
        {
            $condidatures = Condidature::with('diplom')->get();
        
            foreach ($condidatures as $condidature) {
                $totalMoyenne = 0;
                $numMoyennes = 0;
        
                // Calculate the total moyenne_s1 to moyenne_s10 for the current Condidature
                foreach ($condidature->diplom as $diplome) {
                    $totalMoyenne += array_sum(array_filter([
                        $diplome->moyenne_s1,
                        $diplome->moyenne_s2,
                        $diplome->moyenne_s3,
                        $diplome->moyenne_s4,
                        $diplome->moyenne_s5,
                        $diplome->moyenne_s6,
                        $diplome->moyenne_s7,
                        $diplome->moyenne_s8,
                        $diplome->moyenne_s9,
                        $diplome->moyenne_s10,
                    ], function ($moyenne) {
                        return !is_null($moyenne);
                    }));
        
                    // Count the non-null moyenne values
                    $numMoyennes += count(array_filter([
                        $diplome->moyenne_s1,
                        $diplome->moyenne_s2,
                        $diplome->moyenne_s3,
                        $diplome->moyenne_s4,
                        $diplome->moyenne_s5,
                        $diplome->moyenne_s6,
                        $diplome->moyenne_s7,
                        $diplome->moyenne_s8,
                        $diplome->moyenne_s9,
                        $diplome->moyenne_s10,
                    ], function ($moyenne) {
                        return !is_null($moyenne);
                    }));
                }
        
                $condidature->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
            }
        
            return view("admin.compte_utilisateur", compact('condidatures'));
        }
        public function affichetest()
        {
            $condidatures = Condidature::with('diplom')->get();
        
            foreach ($condidatures as $condidature) {
                $totalMoyenne = 0;
                $numMoyennes = 0;
        
                // Calculate the total moyenne_s1 to moyenne_s10 for the current Condidature
                foreach ($condidature->diplom as $diplome) {
                    $totalMoyenne += array_sum(array_filter([
                        $diplome->moyenne_s1,
                        $diplome->moyenne_s2,
                        $diplome->moyenne_s3,
                        $diplome->moyenne_s4,
                        $diplome->moyenne_s5,
                        $diplome->moyenne_s6,
                        $diplome->moyenne_s7,
                        $diplome->moyenne_s8,
                        $diplome->moyenne_s9,
                        $diplome->moyenne_s10,
                    ], function ($moyenne) {
                        return !is_null($moyenne);
                    }));
        
                    // Count the non-null moyenne values
                    $numMoyennes += count(array_filter([
                        $diplome->moyenne_s1,
                        $diplome->moyenne_s2,
                        $diplome->moyenne_s3,
                        $diplome->moyenne_s4,
                        $diplome->moyenne_s5,
                        $diplome->moyenne_s6,
                        $diplome->moyenne_s7,
                        $diplome->moyenne_s8,
                        $diplome->moyenne_s9,
                        $diplome->moyenne_s10,
                    ], function ($moyenne) {
                        return !is_null($moyenne);
                    }));
                }
        
                $condidature->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
            }
        
            return view("admin.test", compact('condidatures'));
        }
        public function fiche(){
            return view("etudiant.fiche_etudiant");
        }
        public function etudiante(){
            return view("etudiant.modifierEtudiant");
        }
        
    
}
