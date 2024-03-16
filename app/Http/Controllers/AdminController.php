<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Diplome;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function afficheDonneBase()
    {
        $diplomes = Diplome::with('candidature')->get();
        
        foreach ($diplomes as $diplome) {
            $totalMoyenne = 0;
            $numMoyennes = 0;
    
            

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
            
    
            $diplome->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
        }
    
        return view("admin.compte_utilisateur", compact('diplomes'));
    }
    
    
       public function affichetest()
{
    $diplomes = Diplome::with('candidature')->get();
    foreach ($diplomes as $diplome) {
        $totalMoyenne = 0;
        $numMoyennes = 0;

        

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
        

        $diplome->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
    }
    
    return view("admin.test", compact('diplomes'));
}

        
        
        public function fiche(){
            return view("etudiant.fiche_etudiant");
        }
        public function etudiante(){
            return view("etudiant.modifierEtudiant");
        }
        
    
}
