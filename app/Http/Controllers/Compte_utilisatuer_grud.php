<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Choix_classement;
use App\Models\Diplome;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
 use Illuminate\Support\Facades\Storage;
class Compte_utilisatuer_grud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();

        
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
       
    return redirect()->route('ajouter_utilisateurs')->with('error', 'Utilisateurs email déja exists il y a un erreur');
       }else{
        $success = User::create([
            'name' => $request->name,   
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role,
            // 'email_verified_at' => Carbon::now()
            'email_verified_at' => time()

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
        $candidature = Candidature::with('diplome')->find($id);
    
        if ($candidature) {
            return view("admin.details-document", compact('candidature'));
        } else {
            return redirect()->route('list_candidature')->with('error', 'Aucun document trouvé.');
        }
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
    public function updateForm(string $id)
    {
        //
        $user = User::find($id);
        return view("admin.edit-user",compact("user"));
    }
    public function update(Request $request, string $id)
{
    // Find the user by ID
    $user = User::find($id);

    // Ensure the user exists
    if (!$user) {
        return redirect()->route('compte_utilisateur')->with('error', 'Utilisateur non trouvé');
    }

    // Validate the request data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'role' => 'required',
    ]);

    // Update user attributes
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;

    // Check if password is provided and not empty, then hash and update
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    // Save the updated user
    $user->save();

    return redirect()->route('compte_utilisateur')->with('success', 'Utilisateur modifié avec succès');
}

    /**0666082071madame ilhame service de stage parteinrien
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('compte_utilisateur')->with('error', 'Utilisateur non trouvé.');
        }
    
        $candidature = Candidature::where('user_id', $user->id)->first();
    
        if ($candidature) {
            if ($candidature->scan_cin) {
                Storage::delete("public/dossier_scan/{$candidature->scan_cin}");
            }

            if ($candidature->photo_personnel) {
                Storage::delete("public/dossier_scan/{$candidature->photo_personnel}");
            }
            $diplome = Diplome::find($candidature->diplome_id);
            if ($diplome) {
                for ($i = 1; $i <= 10; $i++) {
                    $releve_field = "releve_s{$i}";
                    if ($diplome->$releve_field) {
                        Storage::delete("public/dossier_scan/{$diplome->$releve_field}");
                    }
                }

                for ($i = 1; $i <= 4; $i++) {
                    $diplome_supp_field = "diplome_supp{$i}";
                    if ($diplome->$diplome_supp_field) {
                        Storage::delete("public/dossier_scan/{$diplome->$diplome_supp_field}");
                    }
                }

                $diplome->delete();
            }

    
            $choix = Choix_classement::find($candidature->choix_classement_id);
            if ($choix) {
                $choix->delete();
            }
    
            $candidature->delete();
        }
    
        $user->delete();
    
        return redirect()->route('compte_utilisateur')->with('success', 'Utilisateur supprimé avec succès.');
    }
    
    
    
}


