import { defineConfig } from 'vite';
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                base: null,
                includeAbsolute: false,
            }
        }),
    ],
    // server: {
    //     // proxy: {
    //     //     '/': {
    //     //         target: 'http://localhost:8000',
    //     //         changeOrigin: true,
    //     //         ws: true,
    //     //         secure: false,
    //     //     }
    //     // }
    // },
    // build: {
    //     rollupOptions: {
    //         input: {
    //             app: 'resources/js/app.js',
    //         },
    //     },
    // },
});
