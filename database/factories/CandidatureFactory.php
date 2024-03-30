<?php

namespace Database\Factories;

use App\Models\Candidature;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatureFactory extends Factory
{
    protected $model = Candidature::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'sexe' => $this->faker->randomElement(['male', 'female']),
            'cin' => $this->faker->unique()->numerify('#############'),
            'scan_cin' => 'path/to/scan_cin',
            'cne_cme' => $this->faker->unique()->numerify('#############'),
            'date_naissance' => $this->faker->date(),
            'nationalite' => $this->faker->country,
            'adresse' => $this->faker->address,
            'ville_natale' => $this->faker->city,
            'num_tel' => $this->faker->phoneNumber,
            'photo_personnel' => 'path/to/photo',
            'note_ecrite' => $this->faker->randomFloat(2, 0, 20),
            'merite' => $this->faker->randomFloat(2, 0, 20),
            'annee_universitaire' => $this->faker->year(),
            'etat' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            'user_id' => User::factory()->create()->id,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Candidature $candidature) {
            $user = User::inRandomOrder()->first();
            $candidature->user()->associate($user);
            $candidature->save();
        });
    }
}
