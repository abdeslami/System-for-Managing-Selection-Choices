<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CandidatureImport;
use App\Models\Choix_classement;
use DateTime;
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
       $usersCount = User::count();
       $diplomesCount = Diplome::with('candidature')->count();
       $Candidature = Candidature::all();
       $homme = 0;
       $femme = 0;
       $ages = [];
   
       foreach ($Candidature as $Candidatures) {
           if ($Candidatures->sexe == "homme") {
               $homme++;
           } else {
               $femme++;
           }
   
           if ($Candidatures->date_naissance) {
               $date_naissance = new DateTime($Candidatures->date_naissance);
               $aujourd_hui = new DateTime();
               $age = $date_naissance->diff($aujourd_hui)->y;  // Calcul de l'âge
               $annee = $aujourd_hui->format('Y') - $age;  // Année de naissance
               if (!isset($ages[$annee])) {
                   $ages[$annee] = 0;
               }
               $ages[$annee]++;
           }
       }
       $data = [];
       $labels = [];
   
       foreach ($ages as $annee => $count) {
           $labels[] = $annee;
           $data[] = $count;
       }
   
       $chartData = [
           'labels' => $labels,
           'datasets' => [
               [
                   'label' => 'Nombre de candidats',
                   'data' => $data,
                   'backgroundColor' => 'rgba(0,123,255,0.5)',
                   'borderColor' => 'rgba(0,123,255,1)',
                   'borderWidth' => 3
               ]
           ]
       ];
   
       return view("admin.dashboard", compact('diplomesCount', 'usersCount', 'homme', 'femme', 'chartData'));
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
    public function choix_candidatre(){
        return view("admin.manupilation_choix");
    }
    
    
       public function affichetest()
{
    $diplomes = Diplome::with('candidature')->get();

    
    
    return view("admin.test", compact('diplomes'));
}

        
        
        public function fiche(){
            return view("etudiant.fiche_etudiant");
        }
        public function etudiante(){
            return view("etudiant.modifierEtudiant");
        }
        
    
}
