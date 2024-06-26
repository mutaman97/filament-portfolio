<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layout>
 */
class LayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /** Hero Section */
            'hero_section_title' => 'I Craft The<br><span class="text-theme">Digital Landscape</span>',
            'hero_section_subtitle_text' => 'I am a <span class="font-medium text-black dark:text-white/90">Back-end Developer</span> at heart and, i create features that are best suited for the job',
            'hero_section_button_text' => 'HIRE ME',
            'hero_section_button_url' => '#contact',
            'hero_button_link_target' => '_self',
            'hero_alt_button_text' => 'GITHUB',
            'hero_alt_button_url' => 'https://github.com/mutaman97',
            'hero_alt_button_link_target' => '_blank',

            /** Portfolio Section */
            'portfolio_section_title' => 'Featured <span class="font-semibold text-theme">Projects</span>',
            'portfolio_section_subtitle_text' => 'Here are some of my projects I\'ve worked on recently',

            /** About Section */
            'about_section_title' => 'About <span class="font-semibold text-theme">Me</span>',
            'about_section_subtitle_text' => 'About <span class="font-semibold text-theme">Me</span>',

            /** Contact Section */
            'contact_section_title' => 'Contact <span class="font-semibold text-theme">Me.</span>',
            'contact_section_subtitle_text' => 'Get In Touch',
            'contact_section_address' => 'AL Majaz 2 <br/> Sharjah <br/> United Arab Emirates',
            'contact_section_email' => 'mutamanelhadi97@gmail.com',
            'contact_section_phone' => '+971 543 316 900',

            /** Clients Section */
            'clients_section_title' => '<span class="text-highlight">Trusted</span> by',
            'clients_section_subtitle_text' => 'Here are some of the companies I\'ve worked with',

            /** Newsletter Module */
            'newsletter_section_title' => '117+ people joined this week',
            'newsletter_section_subtitle_text' => 'join our newsletter and stay updated on new projects and features.',
            'newsletter_section_button_text' => 'Join',
        ];
    }
}
