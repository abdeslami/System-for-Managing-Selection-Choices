<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Choix_classement extends Model
{

    protected $fillable = [
        'choix_1', 'choix_2', 'choix_3', 'choix_4', 'choix_5',
        'choix_6', 'choix_7', 'choix_8', 'choix_9',
    ];

    public function candidature()
    {
        return $this->hasOne(Candidature::class);

    }
}
