<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Choix_classement;
use App\Models\Diplome;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index() {
        $event = Event::first();
        return view("admin.event-c-i", compact('event'));
    }
    public function storeDate(Request $request){
        $date = $request->except('_token');
        $existingEvent = Event::first();
    
        if($existingEvent) {
            if($request->date_debut_inscript && $request->date_fin_inscript){
            $existingEvent->date_debut_inscript=$request->date_debut_inscript;
            $existingEvent->date_fin_inscript=$request->date_fin_inscript;}
            else{
            $existingEvent->date_debut_choix=$request->date_debut_choix;
            $existingEvent->date_fin_choix=$request->date_fin_choix;}
            $existingEvent->save();          
            return redirect()->route('event')->with('success', 'Dates d\'inscription mises à jour avec succès');
        } else {
            $Event=new Event();
            $Event->date_debut_inscript=$request->date_debut_inscript;
            $Event->date_fin_inscript=$request->date_fin_inscript;
            $Event->date_debut_choix=$request->date_debut_choix;
            $Event->date_fin_choix=$request->date_fin_choix;
            $Event->save();


            return redirect()->route('event')->with('success', 'Dates d\'inscription bien stockées');
        }
    }
    public function ouvrireinscription(Request $request){
        $event = Event::first(); 
        $event->etat_inscript = "active"; 
        $event->save(); 
    
            return redirect()->route('event')->with('success', 'L\'inscription a été ouverte avec succès.');
        
    }
    
    public function fermeinscription(Request $request){
        $event = Event::first(); 
        $event->etat_inscript = "desable"; 
        $event->save(); 
    
            return redirect()->route('event')->with('success', 'L\'inscription a été ferme avec succès.');
    }
    public function ouvrirechoix(Request $request){
        $event = Event::first(); 
        $event->etat_choix = "active"; 
        $event->save(); 
    
            return redirect()->route('event')->with('success', 'La selection de Choix a été ouvrir avec succès.');
    }
    public function fermechoix(Request $request){
        $event = Event::first(); 
        $event->etat_choix = "desable"; 
        $event->save(); 
    
            return redirect()->route('event')->with('success', 'La selection de Choix a été ferme avec succès.');
    }
    



    public function not_admin()
    {
        $candidatures = Candidature::where('etat', 'inscrit')->get();
    
        foreach ($candidatures as $candidature) {
            $user = User::find($candidature->user_id);
    
            if ($user) {
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
    
                $user->delete();
            }
        }
    
        return redirect()->route('event')->with('success', 'Toutes les candidatures non acceptées et les fichiers associés ont été supprimés avec succès.');
    }
    public function delete_all_candidature() {
        $users = User::where("role", "candidat")->get();
    
        foreach ($users as $user) {
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
        }
    
        return redirect()->route('event')->with('success', 'Toutes les candidatures non acceptées et les fichiers associés ont été supprimés avec succès.');
    }
    
    
}
