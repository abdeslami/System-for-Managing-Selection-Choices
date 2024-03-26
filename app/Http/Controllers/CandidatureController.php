<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Http\Requests\StoreCandidatureRequest;
use App\Http\Requests\UpdateCandidatureRequest;
use App\Models\Choix_classement;
use App\Models\Diplome;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $candidat =  Candidature::where("user_id",auth()->id())->get();
/*         dd($candidat);
 */        return view("etudiant.fiche_etudiant",compact("candidat"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
            $userId = auth()->id();
            $candidatureExist = Candidature::where("user_id",$userId)->first();
        if($candidatureExist){
            return view("etudiant.formulaire",compact('candidatureExist'));
        }
        else{   return view("etudiant.formulaire");     }
    

    
        
    }
    public function choix()
    {
        // 
            $userId = auth()->id();
            $candidatureExist = Candidature::where("user_id",$userId)->first();
        if($candidatureExist){
            return view("etudiant.choix",compact('candidatureExist'));
        }
        else{   return view("etudiant.choix");     }
    

    
        
    }
    public function step1(Request $request)
    {
/*             $userId = auth()->id();
            $candidatureExist = Candidature::where("user_id",$userId)->first();
        // Validate the incoming request data if necessary
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            // Add validation rules for other fields here
        ]);
        

        if(isset($request->scan_cin)){
            $path = $request->file('scan_cin')->store("documents");
        }
        $validatedData["scan_cin"]=$path;
        if($candidatureExist){
            $candidatureExist->update($request->all());

        }
        else{        $validatedData["user_id"]=$userId;
        // Create a new Candidature model instance with the validated data
        $candidature = Candidature::create($validatedData);}
    
        // Optionally, you can redirect the user to the next step of the form
 */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidatureRequest   $request)/* Request */
    {   
        $attributes = $request->all()  ;
                    $userId = auth()->id();
            $candidatureExist = Candidature::where("user_id",$userId)->first();
        // Validate the incoming request data if necessary
/*         $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            // Add validation rules for other fields here
        ]); */

        if(isset($request->scan_cin)){
            $path = $request->file('scan_cin')->store("documents");
            $attributes["scan_cin"]=$path;

        }
        if($candidatureExist){
            $candidatureExist->update($attributes);
            $candidatureExist->diplome->update($attributes);
            return redirect()->route('suivi')->with('success', 'Le formulaire ont été mis à jour avec succès.');


        }
        else{      
            
            $attributes["user_id"]=$userId;
        // Create a new Candidature model instance with the validated data
        $candidature =Candidature::create($attributes);
        $attributes['nom']= $request->nom_diplome;
            $diplome= Diplome::create($attributes);


            $diplome->candidature()->save($candidature);
            return redirect()->route('suivi')->with('success', 'Le formulaire ont été ajouter avec succès.');

    }
    
        // Optionally, you can redirect the user to the next step of the form

    }
    public function store_choix(Request $request)
    {
        $attributes = $request->all();
        $userId = auth()->id();
        $choices = collect($attributes)->only(['choix_1', 'choix_2', 'choix_3', 'choix_4', 'choix_5', 'choix_6', 'choix_7', 'choix_8', 'choix_9'])->filter();
    
        if ($choices->unique()->count() !== $choices->count()) {
            return redirect()->route('choix_filiere')->with('error', 'Sélectionnez un seul choix pour chaque option.');
        }
        $candidature = Candidature::where('user_id', $userId)->first();
    
        if ($candidature) {
            if ($candidature->choix_classement_id) {
                $choix = Choix_classement::find($candidature->choix_classement_id);
                if ($choix) {
                    $choix->update($choices->toArray());
                    return redirect()->route('choix_filiere')->with('success', 'Les choix ont été mis à jour avec succès.');
                }
            }
            $choix = Choix_classement::create($choices->toArray());
            $candidature->choix_classement_id = $choix->id;
            $candidature->save();
        } else {
            $choix = Choix_classement::create($choices->toArray());
            Candidature::create([
                'choix_classement_id' => $choix->id,
            ]);
        }
    
        return redirect()->route('choix_filiere')->with('success', 'Les choix ont été envoyés avec succès.');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidatureRequest $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidature $candidature)
    {
        //
    }
}
