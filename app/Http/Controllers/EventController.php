<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
       
    }
    public function fermeinscription(Request $request){
       
    }
    public function ouvrirechoix(Request $request){
       
    }
    public function fermechoix(Request $request){
       
    }
}
