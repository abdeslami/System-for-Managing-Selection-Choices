<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class Compte_utilisatuer_grud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Candidature::with('diplome')->get();

        
        // return $data;
        return view('admin.users-table',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ajouter-utilisateur');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
      
    $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
        ]);
    
    $hashedPassword = bcrypt($request->password);
    $existingUser = User::where('email', $request->email)->first();
       if($existingUser){
       
    return redirect()->route('ajouter_utilisateurs')->with('error', 'Utilisateurs dmail déja exists il y a un erreur');
       }else{
        $success = User::create([
            'name' => $request->name,   
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role,
        ]);
       }
    
        
    
       if($success){
        
    return redirect()->route('ajouter_utilisateurs')->with('success', 'Utilisateurs bien ajouté');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('compte_utilisateur')->with('error', 'Utilisateur non trouvé.');
        }
    
        $candidature = $user->candidature;
        if ($candidature) {
            $diplome = $candidature->diplome;
            if ($diplome) {
                $diplome->delete();
            }
            $choixClassement = $candidature->choix;
            if ($choixClassement) {
                $choixClassement->delete();
            }
            $candidature->delete();
        }
    
        $user->delete();
    
        return redirect()->route('compte_utilisateur')->with('success', 'Utilisateur supprimé avec succès.');
    }
    
}