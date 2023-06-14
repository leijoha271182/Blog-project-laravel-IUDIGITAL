import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import vue from '@vitejs/plugin-vue';
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD
                'resources/css/app.css',
=======
                'resources/sass/app.scss',
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
                'resources/js/app.js',
            ],
            refresh: true,
        }),
<<<<<<< HEAD
    ],
=======
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
>>>>>>> 9e61870a5aec3bea5d5005803aa863e7be327ab8
});
