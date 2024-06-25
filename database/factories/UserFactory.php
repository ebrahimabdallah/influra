<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'image' => $this->faker->imageUrl(640, 480, 'users', true), // Example URL, customize as needed
            'youtube' => $this->faker->url,
            'twitter' => $this->faker->url,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Or use Hash::make('password')
            'remember_token' => Str::random(10),
            'category_id' => Category::factory(), // Automatically create a category
        ];
    }
}
