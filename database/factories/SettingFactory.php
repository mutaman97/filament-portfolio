<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Mutaman Portfolio',
            'meta_title' => 'Mutaman | Web Developer | Portfolio',
            'meta_author' => 'Mutaman',
            'meta_description' => 'Hey, I&#039;m Mutaman, a full-stack web developer with a passion for software architecture and clean code. Over the last 4 years, I have developed and maintained complex Web apps using mainly Larave and Vue.',
            'meta_keywords' => 'HTML, CSS, JavaScript, Laravel, Vue.js, Full-stack web development, Software architecture, Clean code, Web app development, Web app maintenance, PHP, Front-end development, Back-end development, Responsive design, RESTful APIs, Version control, Git, Node.js, SQL, MySQL, Web frameworks, Progressive Web Apps, Cross-browser compatibility, Agile methodologies, UX/UI design, MVC architecture, API integration, Code optimization'
        ];
    }

    /**
     *  Indicate that the model's module and layout should be created.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Setting $setting) {
            $setting->module()->create([
                'setting_id' => $setting->id,
            ]);
            $setting->chatbox()->create([
                'setting_id' => $setting->id,
            ]);
            $setting->maintenance()->create([
                'setting_id' => $setting->id,
            ]);
            $setting->core()->create([
                'setting_id' => $setting->id,
            ]);
        });
    }
}
