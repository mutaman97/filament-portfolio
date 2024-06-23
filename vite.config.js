import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/minfo-app.css','resources/css/tailwind.css', 'resources/js/app.js', 'resources/js/minfo-app.js', 'resources/css/filament/admin/theme.css'],
            refresh: true,
        }),
    ],
});
