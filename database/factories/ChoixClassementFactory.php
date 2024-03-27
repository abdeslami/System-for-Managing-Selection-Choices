<?php

namespace Database\Factories;

use App\Models\Choix_classement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoixClassementFactory extends Factory
{
    protected $model = Choix_classement::class;

    public function definition()
    {
        return [
            'choix_1' => $this->faker->name,
            'choix_2' => $this->faker->name,
            'choix_3' => $this->faker->name,
            'choix_4' => $this->faker->name,
            'choix_5' => $this->faker->name,
            'choix_6' => $this->faker->name,
            'choix_7' => $this->faker->name,
            'choix_8' => $this->faker->name,
            'choix_9' => $this->faker->name,
        ];
    }
}
