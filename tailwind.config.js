import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Syne', 'sans-serif'],
                body: ['DM Sans', 'sans-serif'],
            },
            keyframes:{
                fadeUp:{
                    from: {opacity: '0', transform:'translateY(24px)'},
                    to: {opacity:'1', transform:'translateY(0)'},
                },
            },
            animation:{
                'fade-up':'fadeUp .7s ease both',
            },
        },
    },

    plugins: [forms],
};
