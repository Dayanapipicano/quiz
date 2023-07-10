<?php

namespace Database\Factories;

use App\Models\compania;
use App\Models\compañia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class companiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = compania::class;
    public function definition(): array
    {
        return [
            'actiP_com'=>$this->faker->sentence(),
        ];
    }
}
