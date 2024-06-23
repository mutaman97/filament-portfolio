<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Navigation>
 */
class NavigationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => '[{"url": "#contact", "name": "HIRE ME", "target": "_self", "is_active": true}, {"url": "/doc", "name": "Documentation", "target": "_self", "is_active": true}, {"url": "https://github.com/mutaman97", "name": "GITHUB", "target": "_blank", "is_active": true}]',
        ];
    }
}
