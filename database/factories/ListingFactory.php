<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'title' =>$this->faker->sentence(),
            'company' =>$this->faker->company(),
            'email' =>$this->faker->companyEmail(),
            'website' =>$this->faker->url(),
            'location' =>$this->faker->city(),
            'tags'=> 'laravel, php, api',
            'description' =>$this->faker->paragraph(5),   
        ];
    }
}
