<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rawBody = $this->faker->paragraphs(8);
        $slug = $this->faker->slug;
        return [
            'slug' => $slug,
            'headline' => $this->faker->sentence,
            'body' => '<p>' . implode('</p><p>', $rawBody) . '</p>',
            'image_url' => 'https://loremflickr.com/640/480' . '?slug=' . $slug,
            'user_id' => User::factory(),
        ];
    }
}
