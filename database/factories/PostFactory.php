<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //factory helps us to use faker to generate random data
        return [
            "title"=>fake()->name(),
            "description"=>fake()->text($maxNbChars = 200),
        ];
    }
}
