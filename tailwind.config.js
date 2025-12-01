import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'blue-work': '#00a0e3',
                'blue-work-100': '#00A0E3B2',
                'red-work-100': '#E31E2499',
                'red-work': '#e31e24',
                'work-main': '#0d2a52',
                'work-main-light': '#00A0E3',
            },
        },
    },

    plugins: [forms, typography],
};
