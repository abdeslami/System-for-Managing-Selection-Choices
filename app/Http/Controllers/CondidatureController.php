<?php

namespace App\Http\Controllers;

use App\Models\Condidature;
use App\Models\Diplome;

use App\Http\Requests\StoreCondidatureRequest;
use App\Http\Requests\UpdateCondidatureRequest;
use Illuminate\Http\Request;

class CondidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $condidature = Condidature::all();

        $diplome = $condidature->diplom;
    
        return view("admin.index",compact('condidature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.etudiant");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        if ($request->hasFile('photo_personnel')) {
            $scanCinOriginalName = $request->file('photo_personnel')->getClientOriginalName();
            $scanPhotoEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('photo_personnel')->getClientOriginalExtension();
           
            $scanCinPath = $request->file('photo_personnel')->storeAs('photo', $scanPhotoEncryptedName, 'public');
        }
        
        

        if ($request->hasFile('scan_cin')) {
            $scanCinOriginalName = $request->file('scan_cin')->getClientOriginalName();
            $scanCinEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('scan_cin')->getClientOriginalExtension();
            $scanCinPath = $request->file('scan_cin')->storeAs('dossier_scan', $scanCinEncryptedName);
        }
        if ($request->hasFile('scan_bac')) {
            $scanCinOriginalName = $request->file('scan_bac')->getClientOriginalName();
            $scanBacEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('scan_bac')->getClientOriginalExtension();
            $scanCinPath = $request->file('scan_bac')->storeAs('dossier_scan', $scanBacEncryptedName);
        }
        if ($request->hasFile('scan_diplome')) {
            $scanCinOriginalName = $request->file('scan_diplome')->getClientOriginalName();
            $scanDilpomeEncryptedName = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('scan_diplome')->getClientOriginalExtension();
            $scanCinPath = $request->file('scan_diplome')->storeAs('dossier_scan', $scanDilpomeEncryptedName);
        }
       





        if($request->hasFile('releve_s1')){

        $releve_s1Filename = $request->file('releve_s1')->getClientOriginalName();
        $releve_s1Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s1')->getClientOriginalExtension();
        $scanCinPath = $request->file('releve_s1')->storeAs('dossier_scan', $releve_s1Filename);
        }

        if($request->hasFile('releve_s1')){

            $releve_s1Filename = $request->file('releve_s1')->getClientOriginalName();
            $releve_s1Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s1')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s1')->storeAs('dossier_scan', $releve_s1Filename);
         }
         if($request->hasFile('releve_s2')){

            $releve_s2Filename = $request->file('releve_s2')->getClientOriginalName();
            $releve_s2Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s2')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s2')->storeAs('dossier_scan', $releve_s2Filename);
         }
         if($request->hasFile('releve_s3')){

            $releve_s3Filename = $request->file('releve_s3')->getClientOriginalName();
            $releve_s3Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s3')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s3')->storeAs('dossier_scan', $releve_s3Filename);
         }
         if($request->hasFile('releve_s4')){

            $releve_s4Filename = $request->file('releve_s4')->getClientOriginalName();
            $releve_s4Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s4')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s4')->storeAs('dossier_scan', $releve_s4Filename);
         }
         if($request->hasFile('releve_s5')){

            $releve_s5Filename = $request->file('releve_s5')->getClientOriginalName();
            $releve_s5Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s5')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s5')->storeAs('dossier_scan', $releve_s5Filename);
         }
         if($request->hasFile('releve_s6')){

            $releve_s6Filename = $request->file('releve_s6')->getClientOriginalName();
            $releve_s6Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s6')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s6')->storeAs('dossier_scan', $releve_s6Filename);
         }
         if($request->hasFile('releve_s7')){

            $releve_s7Filename = $request->file('releve_s7')->getClientOriginalName();
            $releve_s7Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s7')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s7')->storeAs('dossier_scan', $releve_s7Filename);
         }
         if($request->hasFile('releve_s8')){

            $releve_s8Filename = $request->file('releve_s8')->getClientOriginalName();
            $releve_s8Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s8')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s8')->storeAs('dossier_scan', $releve_s8Filename);
         }
         if($request->hasFile('releve_s9')){

            $releve_s9Filename = $request->file('releve_s9')->getClientOriginalName();
            $releve_s9Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s9')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s9')->storeAs('dossier_scan', $releve_s9Filename);
         }
         if($request->hasFile('releve_s10')){

            $releve_s10Filename = $request->file('releve_s10')->getClientOriginalName();
            $releve_s10Filename = hash('sha256', time() . $scanCinOriginalName) . '.' . $request->file('releve_s10')->getClientOriginalExtension();
            $scanCinPath = $request->file('releve_s10')->storeAs('dossier_scan', $releve_s10Filename);
         }

            


      
        $condidature = new Condidature();
        $condidature->nom = $request->nom;
        $condidature->prenom = $request->prenom;
        $condidature->sexe = $request->sexe;
        $condidature->cin = $request->cin;
        if(isset($scanCinEncryptedName)){
            $condidature->scan_cin = $scanCinEncryptedName; // Save the original filename
        }
        $condidature->cne_cme = $request->cne_cme;
        $condidature->date_naissance = $request->date_naissance;
        $condidature->nationalite = $request->nationalite;
        $condidature->adresse = $request->adresse;
        $condidature->ville_natale = $request->ville_natale;
        $condidature->num_tel = $request->num_tel;
        if(isset($scanPhotoEncryptedName)){

        $condidature->photo_personnel = $scanPhotoEncryptedName; // Save the original filename
        }
        $condidature->annee_universitaire = $request->annee_universitaire;
        // Set other fields as needed
        $condidature->save();

        // Create a new Diplome instance and associate it with the Condidature
        $diplome = new Diplome();
        $diplome->nom = $request->diplome_nom;
        $diplome->mention_diplome = $request->mention_diplome;
        if(isset($scanBacEncryptedName)){

        $diplome->scan_bac = $scanBacEncryptedName;  // Save the original filename
        }
       
        $diplome->date_bac = $request->date_bac;
        if(isset($scanDilpomeEncryptedName)){

        $diplome->scan_diplome = $scanDilpomeEncryptedName; // Save the original filename
        }
        $diplome->type_diplome = $request->type_diplome;
        $diplome->moyenne_s1 = $request->moyenne_s1;
        $diplome->moyenne_s2 = $request->moyenne_s2;
        $diplome->moyenne_s3 = $request->moyenne_s3;
        $diplome->moyenne_s4 = $request->moyenne_s4;
        $diplome->moyenne_s5 = $request->moyenne_s5;
        $diplome->moyenne_s6 = $request->moyenne_s6;
        $diplome->moyenne_s7 = $request->moyenne_s7;
        $diplome->moyenne_s8 = $request->moyenne_s8;
        $diplome->moyenne_s9 = $request->moyenne_s9;
        $diplome->moyenne_s10 = $request->moyenne_s10;
        if(isset($releve_s1Filename)){

        $diplome->releve_s1 = $releve_s1Filename;
        }
        if(isset($releve_s2Filename)){

        $diplome->releve_s2 =  $releve_s2Filename;
        }
        if(isset($releve_s3Filename)){

        $diplome->releve_s3 =  $releve_s3Filename;
        }
        if(isset($releve_s4Filename)){

        $diplome->releve_s4 =  $releve_s4Filename;
        }
        if(isset($releve_s5Filename)){

        $diplome->releve_s5 =  $releve_s5Filename;
        }
        if(isset($releve_s6Filename)){

        $diplome->releve_s6 =  $releve_s6Filename;
        }
        if(isset($releve_s7Filename)){

        $diplome->releve_s7 = $releve_s7Filename;
        }
        if(isset($releve_s8Filename)){

        $diplome->releve_s8 =  $releve_s8Filename;
        }
        if(isset($releve_s9Filename)){

        $diplome->releve_s9 =  $releve_s9Filename;
        }
        if(isset($releve_s10Filename)){

        $diplome->releve_s10 =  $releve_s10Filename;
        }
       $condidature->diplom()->save($diplome);

        // Return a success response
        return response()->json(['message' => 'Condidature and Diplome inserted successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Condidature $condidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condidature $condidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCondidatureRequest $request, Condidature $condidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Condidature $condidature)
    {
        //
    }
}
