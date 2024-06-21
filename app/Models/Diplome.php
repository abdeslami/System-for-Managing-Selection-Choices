<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{

    protected $fillable = [
        'nom', 'mention_diplome', 'etablissement', 'scan_bac', 'date_bac', 'scan_diplome',
        'type_diplome', 'moyenne_s1', 'moyenne_s2', 'moyenne_s3', 'moyenne_s4', 'moyenne_s5',
        'moyenne_s6', 'moyenne_s7', 'moyenne_s8', 'moyenne_s9', 'moyenne_s10', 'releve_s1',
        'releve_s2', 'releve_s3', 'releve_s4', 'releve_s5', 'releve_s6', 'releve_s7', 'releve_s8',
        'releve_s9', 'releve_s10', 'diplome_supp1', 'diplome_supp2', 'diplome_supp3', 'diplome_supp4',
        'nom_ds1', 'nom_ds2', 'nom_ds3', 'nom_ds4', 'merite',
    ];
    
    
    public function candidature()
    {
        return $this->hasOne(Candidature::class);
    }

}
