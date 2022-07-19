import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import svgLoader from 'vite-svg-loader';
import eslint from 'vite-plugin-eslint';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        svgLoader({
            svgo: true,
            svgoConfig: {
                plugins: ['removeDimensions', 'sortAttrs'],
            },
        }),
        eslint(),
    ],
    test: {
        globals: true,
        environment: 'happy-dom',
        coverage: {
            reporter: ['text', 'json', 'html'],
        },
    },
});
