<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Condidature extends Model
{
    use HasFactory;
    protected $primaryKey = "id_condidat";

    public function choix()
    {
        return $this->hasOne(Choix_classement::class, "id_condidat");
    }

    public function diplom()
    {
        return $this->hasMany(Diplome::class, "id_condidat");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "id_users");
    }
}
