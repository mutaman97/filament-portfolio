<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the courses
        $courses = [
            [
                'name' => 'Bsc Mining Engineering',
                'description' => 'Bachelor of Science in Mining Engineering.',
                'institution' => 'University Of Khartoum',
                'start_date' => '2015-10-15',
                'end_date' => '2021-12-30',
                'status' => 'Completed',
            ],
            [
                'name' => 'Software Engineering',
                'description' => 'Intensive software engineering program by ALX Africa.',
                'institution' => 'ALX Africa & Holberton School',
                'start_date' => '2023-07-17',
                'end_date' => '2024-07-15',
                'status' => 'Completed',
            ],
        ];

        // Insert the courses into the database
        DB::table('courses')->insert($courses);
    }
}
