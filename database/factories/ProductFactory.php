<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'summary' => fake()->sentence(10),
            'description' => fake()->paragraphs(3, true),
            'tech_stack' => fake()->randomElement([
                'Laravel, Vue.js, MySQL',
                'React, Node.js, MongoDB',
                'PHP, JavaScript, PostgreSQL',
                'Python, Django, Redis',
                'Laravel, Livewire, Tailwind CSS'
            ]),
            'client' => fake()->company(),
            'project_url' => fake()->optional()->url(),
            'image_path' => null,
            'started_at' => fake()->dateTimeBetween('-2 years', '-1 month'),
            'ended_at' => fake()->optional()->dateTimeBetween('-1 month', 'now'),
            'status' => fake()->randomElement(['completed', 'in_progress', 'on_hold']),
        ];
    }
}
