<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Awcodes\Curator\Models\Media;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'name' => 'PHP',
                'description' => 'Server-side scripting language for web development.',
                'logo' => 'assets/img/skill/php.svg',
                'rate' => 90,
                'url' => '#',
            ],
            [
                'name' => 'Vue Js',
                'description' => 'JavaScript framework for building user interfaces.',
                'logo' => 'assets/img/skill/vue.svg',
                'rate' => 85,
                'url' => '#',
            ],
            [
                'name' => 'Javascript',
                'description' => 'High-level, often just-in-time compiled, and multi-paradigm.',
                'logo' => 'assets/img/skill/js.svg',
                'rate' => 88,
                'url' => '#',
            ],
            [
                'name' => 'HTML5',
                'description' => 'Markup language used for structuring and presenting content.',
                'logo' => 'assets/img/skill/html.svg',
                'rate' => 92,
                'url' => '#',
            ],
            [
                'name' => 'CSS3',
                'description' => 'Style sheet language used for describing the presentation of a document.',
                'logo' => 'assets/img/skill/css.svg',
                'rate' => 89,
                'url' => '#',
            ],
            [
                'name' => 'Nuxt',
                'description' => 'Framework for creating Vue.js applications.',
                'logo' => 'assets/img/skill/nuxt.svg',
                'rate' => 87,
                'url' => '#',
            ],
        ];

        foreach ($skills as $skill) {
            $fileName = pathinfo($skill['logo'], PATHINFO_BASENAME);

            $directory = config('curator.directory');
            $disk = config('curator.disk');

            if (! Storage::disk($disk)->exists($directory . '/' . $fileName)) {
                $fileContents = file_get_contents(public_path($skill['logo']));
                Storage::disk($disk)->put($directory . '/' . $fileName, $fileContents);
            }

            $filePath = Storage::disk($disk)->path($directory . '/' . $fileName);
            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
            $fileSize = filesize($filePath);

            // Upload the media and create a Media record
            $media = Media::factory()->create([
                'name' => pathinfo($fileName, PATHINFO_FILENAME),
                'path' => $directory . '/' . $fileName,
                'ext' => $fileExtension,
                'type' => 'image/svg+xml',
                'alt' => pathinfo($fileName, PATHINFO_FILENAME),
                'title' => null,
                'caption' => null,
                'description' => null,
                'width' => null,
                'height' => null,
                'disk' => $disk,
                'directory' => $directory,
                'size' => $fileSize ?? null,
                'visibility' => 'public',
            ]);

            // Insert the skill with the media ID as the logo
            DB::table('skills')->insert([
                'name' => $skill['name'],
                'description' => $skill['description'],
                'logo' => $media,
                'rate' => $skill['rate'],
                'url' => $skill['url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
