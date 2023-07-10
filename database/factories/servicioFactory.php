<?php

namespace Database\Factories;

use App\Models\servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\servicio>
 */
class servicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = servicio::class;
     
    public function definition(): array
    {
        return [

            'Acti_ser'=>$this->faker->sentence(),
       
        
        ];
    }
}
