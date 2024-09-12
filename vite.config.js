import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    resolve: {
        alias: {
            'media-library-pro-vue3-attachment': '/vendor/spatie/laravel-medialibrary-pro/resources/js/media-library-pro-vue3-attachment',
            'media-library-pro-vue3-collection': '/vendor/spatie/laravel-medialibrary-pro/resources/js/media-library-pro-vue3-collection',
        }
    },
    ssr: {
        noExternal: ['lodash', '@spatie/media-library-pro-vue3-attachment','vue-multiselect','axios'],
    },

    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                compilerOptions: {
                    isCustomElement: (tag) => tag.startsWith('sm:')
                },
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
