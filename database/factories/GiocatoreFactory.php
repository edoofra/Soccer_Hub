<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\giocatore;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Giocatore>
 */
class GiocatoreFactory extends Factory


{
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */

    protected $model = giocatore::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->firstName(),
            'cognome' => $this->faker->lastName(),
            'età' => $this->faker->numberBetween(16, 30),
            'squadra' => $this->faker->company,
        ];
    }
}
