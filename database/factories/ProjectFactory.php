<?php

namespace Database\Factories;

use App\Models\Category;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected static array $projects = [
        [
            'name' => 'Laravel Multi tenancy Store Builder',
            'slug' => 'laravel-multi-tenancy-store-builder',
            'image_cover' => 'assets/img/portfolio/portfolio-img1.png',
            'short_description' => 'Framework for creating Vue.js applications.',
            'content' => 'test',
            'external_link' => 'https://link.com',
            'is_active' => true,
            'category_id' => '1',
        ],
        [
            'name' => 'Laravel Vue JS Quotation System',
            'slug' => 'laravel-vuejs-quotation-system',
            'image_cover' => 'assets/img/portfolio/portfolio-img2.png',
            'short_description' => 'Framework for creating Vue.js applications.',
            'content' => 'test',
            'external_link' => 'https://link.com',
            'is_active' => true,
            'category_id' => '1',
        ],
        [
            'name' => 'Laravel, Filament php portfolio Website',
            'slug' => 'my-portfolio-website',
            'image_cover' => 'assets/img/portfolio/portfolio-img2.png',
            'short_description' => 'Framework for creating Vue.js applications.',
            'content' => 'test',
            'external_link' => 'https://link.com',
            'is_active' => true,
            'category_id' => '1',
        ],
        [
            'name' => 'Laravel Breeze, Vue.js Cart System',
            'slug' => 'laravel-breeze-vuejs-cart-system',
            'image_cover' => 'assets/img/portfolio/portfolio-img1.png',
            'short_description' => 'Framework for creating Vue.js applications.',
            'content' => 'test',
            'external_link' => 'https://link.com',
            'is_active' => true,
            'category_id' => '1',
        ],
        [
            'name' => 'School Canteen Management System',
            'slug' => 'school-canteen-management-system',
            'image_cover' => 'assets/img/portfolio/portfolio-img1.png',
            'short_description' => 'Framework for creating Vue.js applications.',
            'content' => 'test',
            'external_link' => 'https://link.com',
            'is_active' => true,
            'category_id' => '1',
        ],
    ];

    private static int $currentIndex = 0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $project = self::$projects[self::$currentIndex];
        $fileName = pathinfo($project['image_cover'], PATHINFO_BASENAME);

        $directory = config('curator.directory');
        $disk = config('curator.disk');

        if (!Storage::disk($disk)->exists($directory . '/' . $fileName)) {
            $fileContents = file_get_contents(public_path($project['image_cover']));
            Storage::disk($disk)->put($directory . '/' . $fileName, $fileContents);
        }

        $filePath = Storage::disk($disk)->path($directory . '/' . $fileName);
        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileSize = filesize($filePath);

        // Get the MIME type of the file
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileMimeType = finfo_file($fileinfo, $filePath);
        finfo_close($fileinfo);

        $media = Media::factory()->create([
            'name' => pathinfo($fileName, PATHINFO_FILENAME),
            'path' => $directory . '/' . $fileName,
            'ext' => $fileExtension,
            'type' => $fileMimeType,
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

        // Increment the index for the next run
        self::$currentIndex = (self::$currentIndex + 1) % count(self::$projects);

        return [
            'name' => $project['name'],
            'slug' => $this->faker->slug(),
            'image_cover' => $media,
            'short_description' => $project['short_description'],
            'content' => $project['content'],
            'external_link' => $project['external_link'],
            'is_active' => $project['is_active'],
            'category_id' => $project['category_id']
        ];

    }
}
