<?php

namespace Database\Factories;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'specialist_id' => rand(1, 12),
            'name' => $this->faker->name(),
            'fee' => $this->faker->randomElement([400000, 500000, 600000, 700000, 800000, 900000, 1000000]),
            'photo' => $this->faker->imageUrl(610, 800, 'doctors', true),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    }
}
