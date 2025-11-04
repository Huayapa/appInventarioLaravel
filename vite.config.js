import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/crear_productos.css',
                'resources/css/create_detalle_ventas.css',
                'resources/css/create_ventas.css',
                'resources/css/dashboard.css',
                'resources/css/edit_detalle_ventas.css',
                'resources/css/edit_productos.css',
                'resources/css/edit_ventas.css',
                'resources/css/index_detalle_ventas.css',
                'resources/css/index_ventas.css',
                'resources/css/login.css',
                'resources/css/productos.css',
                'resources/css/register.css',
                'resources/css/welcome.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
