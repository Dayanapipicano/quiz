<?php

namespace Database\Factories;

use App\Models\soldado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\soldado>
 */
class soldadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = soldado::class;
    public function definition(): array
    {
        return [
                    'nom_s'=>$this->faker->sentence(),
                    'apellidos_s'=>$this->faker->sentence(),
                    'cod_ce1'=>$this->faker->randomNumber(),
                    'num_com1'=>$this->faker->randomNumber(),
                    'cod_c2'=>$this->faker->randomNumber(),
                   
        ];
    }
}
