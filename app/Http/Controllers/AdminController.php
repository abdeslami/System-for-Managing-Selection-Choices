<?php

namespace App\Http\Controllers;

use App\Exports\table_choix;
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
               $annee =  $age;  // Année de naissance
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
       $accept=Candidature::where('etat','accept')->count();
    //    return $accept;
   
       return view("admin.dashboard", compact('diplomesCount', 'usersCount', 'homme', 'femme', 'chartData',"accept"));
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
    public function choix_candidatre(Request $request){
        $users=Choix_classement::with('candidature')->get();
        $available_places = session('available_places');
        return view("admin.manupilation_choix",compact('users','available_places'));
    }
    
    public function clear(){
        Choix_classement::query()->update(['slected_c1' => "",
                                            'slected_c2' => "",
                                            'slected_c3' => "",]);
        return redirect()->route("choix_candidatre");
    }
    public function export_choix(Request $request){
        return Excel::download(new table_choix, 'exported_data_php.xlsx'); 
    }

    public function affecter_choix(Request $request)
    {

        // Validate form inputs
        $request->validate([
            'candidates_number'=>'numeric|nullable',
            'IDSCC'=>'required',
            'ITIRC'=>'required',
            'SIC'=>'required',
            'GCIV'=>'required',
            'GELC'=>'required',
            'GIND'=>'required',
            'GINF'=>'required',
            'SEIR'=>'required',
            'MGSI'=>'required',  
        ]);
/*         $f1=+$request->input('IDSCC');
        $f2=+$request->input('ITIRC');
        $f3=+$request->input('SIC');
        $f4=+$request->input('GCIV');
        $f5=+$request->input('GELC');
        $f6=+$request->input('GIND');
        $f7=+$request->input('GINF');
        $f8=+$request->input('SEIR');
        $f9=+$request->input('MGSI'); */
        $available_places = [
            'IDSCC' => +$request->input('IDSCC'),
            'ITIRC' => +$request->input('ITIRC'),
            'SIC' => +$request->input('SIC'),
            'GCIV' => +$request->input('GCIV'),
            'GELC' => +$request->input('GELC'),
            'GIND' => +$request->input('GIND'),
            'GINF' => +$request->input('GINF'),
            'SEIR' => +$request->input('SEIR'),
            'MGSI' => +$request->input('MGSI')
        ];
if($request->candidates_number){
    $list_choix=Choix_classement::limit($request->candidates_number)->get();

}
else{
            $list_choix=Choix_classement::all();


}
        
        foreach($list_choix as $choix_candidat){
            $firstIteration = true;
            //dd($choix_candidat);
            for ($i = 1; $i <= 9; $i++) {
                $choixKey = "choix_" . $i;
                $choixValue = $choix_candidat->$choixKey;
                if ($available_places[$choixValue] > 0) {
                    // Update selected choice columns
                    if (empty($choix_candidat->slected_c1)) {
                        Choix_classement::where('id', $choix_candidat->id)->update(['slected_c1' => $choixValue]);
                        $available_places[$choixValue] -= 1;
                        // Reload the model instance after updating the database record
                        $choix_candidat = Choix_classement::find($choix_candidat->id);
                    } elseif (empty($choix_candidat->slected_c2) && $choix_candidat->slected_c1 != $choixValue) {
                        Choix_classement::where('id', $choix_candidat->id)->update(['slected_c2' => $choixValue]);
                        $available_places[$choixValue] -= 1;
                        // Reload the model instance after updating the database record
                        $choix_candidat = Choix_classement::find($choix_candidat->id);
                    } elseif (empty($choix_candidat->slected_c3) && $choix_candidat->slected_c1 != $choixValue && $choix_candidat->slected_c2 != $choixValue) {
                        Choix_classement::where('id', $choix_candidat->id)->update(['slected_c3' => $choixValue]);
                        $available_places[$choixValue] -= 1;
                        // Reload the model instance after updating the database record
                        $choix_candidat = Choix_classement::find($choix_candidat->id);
                    }
                    // Break out of the loop if all three choices are filled
                    if (!empty($choix_candidat->slected_c1) && !empty($choix_candidat->slected_c2) && !empty($choix_candidat->slected_c3)) {
                        break;
                    }
                };
                
            }
            
            
        }


        $av=$available_places;

        /* // Validate form inputs
        $request->validate([
            'candidates_number' => 'required|integer|min:1',
            'IDSCC'=>'required',
            // Add validation rules for the other 9 input fields
        ]);
    
        // Get form inputs
        $candidatesNumber = $request->input('candidates_number');
        $IDSCC=$request->input('IDSCC');
        // Get values for the other 9 input fields
    
        // Generate Excel export data
        $exportData = [
            
            'candidates_number' => $candidatesNumber,
            'candidates'=> Candidature::take(9)->get(),
            'IDSCC' => $IDSCC,
            // Add keys for the other 9 input fields
        ];
    */
     return redirect()->route("choix_candidatre")->with('available_places', $available_places);;
    
    //return to_route("choix_candidatre",compact('available_places'));
    
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
