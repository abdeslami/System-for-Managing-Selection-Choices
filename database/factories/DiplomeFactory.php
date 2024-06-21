<?php

namespace Database\Factories;

use App\Models\Diplome;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiplomeFactory extends Factory
{
    protected $model = Diplome::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'mention_diplome' => $this->faker->firstName,
            'etablissement' => $this->faker->randomElement(['male', 'female']),
            'scan_bac' => $this->faker->unique()->numerify('#############'),
            'scan_cin' => 'path/to/scan_cin',
            'date_bac' => $this->faker->unique()->numerify('#############'),
            'scan_diplome' => $this->faker->date(),
            'type_diplome' => $this->faker->country,
            'moyenne_s1' => $this->faker->randomNumber(2),
            'moyenne_s2' => $this->faker->randomNumber(2),
            'moyenne_s3' => $this->faker->randomNumber(2),
            'moyenne_s4' => $this->faker->randomNumber(2),
            'moyenne_s5' => $this->faker->randomNumber(2),
            'moyenne_s6' => $this->faker->randomNumber(2),
            'moyenne_s7' => $this->faker->randomNumber(2),
            'moyenne_s8' => $this->faker->randomNumber(2),
            'moyenne_s9' => $this->faker->randomNumber(2),
            'moyenne_s10' => $this->faker->randomNumber(2),
            'ville_natale' => $this->faker->city,
            'num_tel' => $this->faker->phoneNumber,
            'photo_personnel' => 'path/to/photo',
            'note_ecrite' => $this->faker->randomFloat(2, 0, 20),
            'merite' => $this->faker->randomFloat(2, 0, 20),
            'annee_universitaire' => $this->faker->year(),
            'etat' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
        ];
    }
}
