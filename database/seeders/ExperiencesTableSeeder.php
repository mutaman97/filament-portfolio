<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the courses
        $experiences = [
            [
                'name' => 'Freelancer Full Stack Web Developer',
                'description' => 'As a Full Stack Web Developer at Upwork, I designed and developed dynamic web applications, utilizing both front-end and back-end technologies to deliver seamless user experiences.',
                'institution' => 'Upwork',
                'start_date' => '2020-10-25',
                'end_date' => '2024-07-15',
                'status' => 'Ongoing',
            ],
            [
                'name' => 'Rida Group Young Talent Development Program Participant',
                'description' => 'Intensive and comprehensive training program designed to nurture and develop young professionals.',
                'institution' => 'Rida Group',
                'start_date' => '2022-07-17',
                'end_date' => '2023-11-30',
                'status' => 'Completed',
            ],
            [
                'name' => 'Full Stack Web Developer',
                'description' => 'I specialized in building end-to-end web solutions tailored to client needs. I utilized a diverse tech stack, including HTML, CSS, JavaScript, Vue.js, Nuxt and backend technologies like Php, Laravel, ASP.Net ',
                'institution' => 'Aldana Computers Tech',
                'start_date' => '2023-12-15',
                'end_date' => '2023-7-15',
                'status' => 'Completed',
            ],
            [
                'name' => 'Software Developer',
                'description' => 'I specialize in building dynamic and scalable web applications using Vue.js, Vuetify, and Laravel. I develop intuitive user interfaces with Vue.js and Vuetify, while leveraging Laravel for robust backend solutions. I also design and implement RESTful APIs to ensure seamless data exchange and integration across platforms.',
                'institution' => 'Richman General Trading',
                'start_date' => '2024-8-1',
                'end_date' => '2024-8-1',
                'status' => 'Ongoing',
            ]
        ];

        // Insert the courses into the database
        DB::table('experiences')->insert($experiences);
    }
}
