<?php

namespace Database\Factories;

use App\Models\TierType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key' => 'tier' . "-" . $this->faker->numberBetween(1 , 10),
            'title' => $this->faker->title(),
            'type_id' => TierType::inRandomOrder()->first()->id ,
            'subtitle' => $this->faker->text(100),
            'description' => $this->faker->text(100),
            'revoked_at' => $this->faker->dateTime,
        ];
    }
}
