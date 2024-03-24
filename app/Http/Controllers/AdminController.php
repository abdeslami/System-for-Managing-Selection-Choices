<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CandidatureImport;
use App\Models\Choix_classement;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
   public function import_candidature_excel(Request $request)  {
   
    Excel::import(new CandidatureImport,$request->file('file'));
    return redirect()->route('list_candidature')->with('success', 'Candidature bien importée');

   }
    public function dashboard_admin()
    {
        $diplomesCount = Diplome::with('candidature')->count();
        $diplomes = Diplome::with('candidature')->get();
        $usersCount = User::count();
        $totalMoyenne = 0;
        $numMoyennes = 0;
    
        foreach ($diplomes as $diplome) {
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
    
    
    
        // Calculate the average moyenne for all candidatures
        $averageMoyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
    
        return view("admin.dashboard", compact('diplomesCount', 'usersCount',"averageMoyenne"));
    }
    public function api_candidature(){
        $data = Candidature::with('diplome')->get();
        
        return $data;
    }
    public function api_candidature_choix(){
        $data = Choix_classement::with('candidature')->get();
        
        return $data;
    }
    public function list_candidature()
    {
        
        return view('admin.candidatures');
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
