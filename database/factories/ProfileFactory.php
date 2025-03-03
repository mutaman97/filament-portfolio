<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'localization' => 'Majan, Dubai, United Arab Emirates',
            'job_position' => 'Full Stack Web Developer',
            'dribbble' => '',
            'github' => 'www.github.com/mutaman97',
            'linkedin' => 'www.linkedin.com/in/mutaman',
            'twitter' => 'www.twitter.com/mutamanelhadi',
            'facebook' => 'www.facebook.com/mutamanelhadi',
            'devto' => 'www.dev.to/mutaman',
            'instagram' => 'www.instagram.com/mutaman',
            'youtube' => '',
            'medium' => '',
            'twitch' => '',
            'skills' => 'PHP, Laravel, Filament, Vue Js, Javascript, Tailwind CSS, Livewire, Node JS',
            'about' => '<p>Enthusiastic full-stack developer with a robust skill set encompassing front-end technologies such as HTML, CSS, and JavaScript, coupled with proficiency in back-end languages like PHP, nodejs and Python.</p><p>Experienced in designing and implementing database structures, API integrations, and responsive user interfaces.</p><br><p>Committed to writing clean, modular code, I bring a detail-oriented approach to development projects.</p><p>Versatile in utilizing frameworks like Laravel, Vue and Nuxt, I am equally adept at crafting scalable, efficient solutions on both ends of the tech stack.</p>',
            'is_open_to_work' => true,
            'document' => 'public/profile/document/Mutaman-Resume.pdf',
            'is_downloadable' => true,
        ];
    }
}
