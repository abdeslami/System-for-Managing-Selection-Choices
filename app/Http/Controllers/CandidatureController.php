<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Http\Requests\StoreCandidatureRequest;
use App\Http\Requests\UpdateCandidatureRequest;
use App\Models\Choix_classement;
use App\Models\Diplome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    public function store(StoreCandidatureRequest $request)
    {   
        $userId = auth()->id();
        $candidatureExist = Candidature::where("user_id", $userId)->first();
        $attributes = $request->all();
    
        // Stocker les fichiers dans le dossier public
        $dossier_scan = 'public/dossier_scan';
        $filesToStore = [
            'photo_personnel', 'scan_cin', 'scan_bac', 'scan_diplome', 'moyenne_s1', 'moyenne_s2', 'moyenne_s3', 'moyenne_s4', 'moyenne_s5',
            'moyenne_s6', 'moyenne_s7', 'moyenne_s8', 'moyenne_s9', 'moyenne_s10', 'releve_s1',
            'releve_s2', 'releve_s3', 'releve_s4', 'releve_s5', 'releve_s6', 'releve_s7', 'releve_s8',
            'releve_s9', 'releve_s10', 'diplome_supp1', 'diplome_supp2', 'diplome_supp3', 'diplome_supp4',
        ];
        
        foreach ($filesToStore as $file) {
            if ($request->hasFile($file)) {
                $originalName = $request->file($file)->getClientOriginalName();
                $extension = $request->file($file)->getClientOriginalExtension();
                $hashedName = hash('sha256',  $originalName . time()) . '.' . $extension;
        
                
        
                $path = $request->file($file)->storeAs($dossier_scan, $hashedName);
        
                // Mettre à jour les attributs avec les chemins des fichiers stockés
                $attributes[$file] = $hashedName;
            }
        }
        
    
        if ($candidatureExist) {
            $candidatureExist->update($attributes);
            $candidatureExist->diplome->update($attributes);
            return redirect()->route('suivi')->with('success', 'Le formulaire a été mis à jour avec succès.');
        } else {
            $attributes["user_id"] = $userId;
            $candidature = Candidature::create($attributes);
            $diplome = Diplome::create($attributes);
            $diplome->candidature()->save($candidature);
    
            return redirect()->route('suivi')->with('success', 'Le formulaire a été ajouté avec succès.');
        }
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
    public function changerEtat(Request $request)
    {
        $ids = json_decode($request->input('ids'), true);
        // dd($ids);
        if ($ids && count($ids) > 0) {
            Candidature::whereIn('id', $ids)->update(['etat' => 'accept']);
            return redirect()->route('list_candidature')->with('success', 'État de la candidature a bien été changé.');
        } else {
            return redirect()->route('list_candidature')->with('error', 'Sélectionnez une candidature pour changer l\'état.');
        }
    }
    public function annulerEtat(Request $request)
    {
        $ids = json_decode($request->input('ids'), true);

        // dd($ids);
        
        if ($ids && count($ids) > 0) {
            Candidature::whereIn('id', $ids)->update(['etat' => 'inscrit']);
            return redirect()->route('list_candidature')->with('success', 'État de Candidature a bien été annulé.');
        } else {
            return redirect()->route('list_candidature')->with('error', 'Sélectionnez une candidature pour annuler l\'état.');
        }
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
