<?php
namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            'make' => $this->faker->company(), // A random company name for the vehicle make
            'model' => $this->faker->word(), // A random word for the vehicle model
            'year' => $this->faker->year(), // A random year for the vehicle year
            'license_plate' => strtoupper($this->faker->unique()->bothify('???-####')), // Random unique license plate
        ];
    }
}
