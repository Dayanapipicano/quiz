<?php

namespace Database\Factories;

use App\Models\cuartel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuartel>
 */
class cuartelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = cuartel::class;
    public function definition(): array
    {
        return [
             
            'nom_c'=>$this->faker->sentence(),
            'ubic_c'=>$this->faker->sentence(),

        ];
    }
}
