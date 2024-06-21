<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom_event","date_debut_inscript","date_fin_inscript","date_debut_choix","date_fin_choix","etat_choix","etat_inscript"
    ];
}
