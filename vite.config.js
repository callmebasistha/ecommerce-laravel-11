import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/frontend/plugins/swiper.min.css', 'resources/css/frontend/style.css', 'resources/css/frontend/custom.css',
                // 'resources/css/backend/animate.min.css', 'resources/css/backend/animation.css', 'resources/css/backend/bootstrap.css', 'resources/css/backend/bootstrap-select.min.css', 'resources/css/backend/style.css', 'resources/css/backend/font/font.css', 'resources/css/backend/icon/style.css', 'resources/css/backend/sweetalert.min.css', 'resources/css/backend/custom.css',
                'resources/css/frontend/app.css',
                'resources/js/frontend/app.js',
            ],
            refresh: true,
        }),
    ],
    css:{
        devSourcemap:true
    }
});
