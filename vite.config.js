import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/librairies/fontawesome-free-6.1.1-web/css/all.min.css',
                'resources/librairies/bootstrap-5.0.2-dist/css/bootstrap.min.css',
                'resources/css/global.css', 
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/librairies/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js'
            ],
            refresh: true,
        }),
    ],
});
