<?php

namespace App\Imports;

use App\Models\Candidature;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class CandidatureImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = Candidature::where('cin', $row['cin'])->first();
        // dd($row);
        if ($user) {
            $user->update([
                "nom" => $row['nom'],
                "prenom" => $row['prenom'],
                "sexe" => $row['sexe'],
                "date_naissance" => $row['date_naissance'],
                "note_ecrite" => $row['note_ecrite'],

               

            ]);
        }
    }
    
}