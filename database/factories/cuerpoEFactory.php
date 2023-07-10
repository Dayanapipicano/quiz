<?php

namespace Database\Factories;

use App\Models\cuerpoE;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuerpoE>
 */
class cuerpoEFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = cuerpoE::class;
    public function definition(): array
    {
        return [
            
            
            'denom_ce'=>$this->faker->sentence(),
        ];
    }
}
