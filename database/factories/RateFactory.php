<?php

namespace Database\Factories;

use App\Models\Rate;
use Illuminate\Database\Eloquent\Factories\Factory;

class RateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'origin'      => $this->faker->city(),
            'destination' => $this->faker->city(),
            'currency'    => $this->faker->currencyCode(),
            'twenty'      => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 80.000), // 48.8932
            'forty'       => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 80.000), // 48.8932
            'fortyhc'      => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 80.000), // 48.8932
            'contract_id' => $this->faker->numberBetween($min = 1, $max = 3)
        ];
    }
}