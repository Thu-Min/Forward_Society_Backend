<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['upcoming','ongoing','finished'];
        $index = rand(0,2);
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentence(),
            'description_detail' => $this->faker->paragraph(),
            'instructor' => $this->faker->userName(),
            'thumbnail' => $this->faker->imageUrl(),
            'status' => $status[$index],
            'start_date' => $this->faker->date('Y-m-d','now'),
            'end_date' => $this->faker->date('Y-m-d','+2 week'),
            'start_time' => $this->faker->time('H:i'),
            'end_time' => $this->faker->time('H:i'),
        ];
    }
}
