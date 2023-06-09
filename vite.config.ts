/*import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
    plugins: [
        vue(),
        laravel()
    ]
})*/
/*
import { defineConfig } from 'vite';
import reactRefresh from '@vitejs/plugin-react-refresh';

export default defineConfig({
    plugins: [reactRefresh()]
})*/

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'localhost'
        }
    },
    plugins: [
        react(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/scss/app.scss',
                //'resources/ts/index.tsx',
                'resources/ts/select_top.tsx',
                'resources/ts/components/ComponentsA.tsx',
                'resources/ts/components/ComponentsB.tsx',
                'resources/ts/components/Router.tsx',
            ],
            refresh: true,
        }),
    ],
});

