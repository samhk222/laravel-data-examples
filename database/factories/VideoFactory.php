<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'extension' => fake()->randomElement(['mp4', 'avi']),
        ];
    }
}
