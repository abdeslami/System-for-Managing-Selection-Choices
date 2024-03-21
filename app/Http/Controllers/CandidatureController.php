<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Http\Requests\StoreCandidatureRequest;
use App\Http\Requests\UpdateCandidatureRequest;
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
        $etat =  Candidature::select('etat')->where("user_id",auth()->id())->get();
/*         dd($etat);
 */        return view("etudiant.fiche_etudiant",compact("etat"));
        
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

        }
        else{      
            
            $attributes["user_id"]=$userId;
        // Create a new Candidature model instance with the validated data
        $candidature =Candidature::create($attributes);
        $attributes['nom']= $request->nom_diplome;
            $diplome= Diplome::create($attributes);


            $diplome->candidature()->save($candidature);

    }
    
        // Optionally, you can redirect the user to the next step of the form

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
