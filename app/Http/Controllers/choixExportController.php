<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ChoixExport;
use App\Exports\table_choix;
use App\Models\Candidature;
use App\Models\Choix_classement;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class choixExportController extends Controller
{
    //

    
    public function index(){
        $users=Choix_classement::all();
     return view('table2',compact("users"));
    }
    public function clear(){
        Choix_classement::query()->update(['slected_c1' => "",
                                            'slected_c2' => "",
                                            'slected_c3' => "",]);
        return redirect('/');
    }

    public function exportData(Request $request)
    {

        // Validate form inputs
        $request->validate([
            'candidates_number'=>'numeric|nullable',
            'nom_f1'=>'required',
            'nom_f2'=>'required',
            'nom_f3'=>'required',
            'nom_f4'=>'required',
            'nom_f5'=>'required',
            'nom_f6'=>'required',
            'nom_f7'=>'required',
            'nom_f8'=>'required',
            'nom_f9'=>'required',  
        ]);
/*         $f1=+$request->input('nom_f1');
        $f2=+$request->input('nom_f2');
        $f3=+$request->input('nom_f3');
        $f4=+$request->input('nom_f4');
        $f5=+$request->input('nom_f5');
        $f6=+$request->input('nom_f6');
        $f7=+$request->input('nom_f7');
        $f8=+$request->input('nom_f8');
        $f9=+$request->input('nom_f9'); */
        $available_places = [
            'nom_f1' => +$request->input('nom_f1'),
            'nom_f2' => +$request->input('nom_f2'),
            'nom_f3' => +$request->input('nom_f3'),
            'nom_f4' => +$request->input('nom_f4'),
            'nom_f5' => +$request->input('nom_f5'),
            'nom_f6' => +$request->input('nom_f6'),
            'nom_f7' => +$request->input('nom_f7'),
            'nom_f8' => +$request->input('nom_f8'),
            'nom_f9' => +$request->input('nom_f9')
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




        /* // Validate form inputs
        $request->validate([
            'candidates_number' => 'required|integer|min:1',
            'nom_f1'=>'required',
            // Add validation rules for the other 9 input fields
        ]);
    
        // Get form inputs
        $candidatesNumber = $request->input('candidates_number');
        $nom_f1=$request->input('nom_f1');
        // Get values for the other 9 input fields
    
        // Generate Excel export data
        $exportData = [
            
            'candidates_number' => $candidatesNumber,
            'candidates'=> Candidature::take(9)->get(),
            'nom_f1' => $nom_f1,
            // Add keys for the other 9 input fields
        ];
    
        // Export the Excel file*/
        redirect('/');
        return Excel::download(new table_choix(), 'exported_data_php.xlsx'); 
        /* return redirect('/'); */
        }
    
    
}
