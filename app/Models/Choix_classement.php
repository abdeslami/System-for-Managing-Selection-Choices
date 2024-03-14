<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choix_classement extends Model
{
    use HasFactory;
    protected $primaryKey="id_choix";
    public function condidat()
    {
        return $this->belongsTo(Condidature::class, "id_condidat");
    }
}
