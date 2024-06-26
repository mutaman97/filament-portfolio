<?php

namespace Database\Factories;

use App\Models\Category;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(2, true);

        // Create or get a media instance
        $media = Media::factory()->create();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image_cover' => $media,
            'short_description' => $this->faker->optional()->text(200),
            'content' => $this->faker->optional()->paragraphs(3, true),
            'external_link' => $this->faker->optional()->url,
//            'is_active' => $this->faker->boolean,
            'category_id' => Category::factory(), // Assuming you have a Category model and factory
        ];

    }
}
