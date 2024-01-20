import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pinero: {
                    '50': '#f7f6ef',
                    '100': '#ece9d5',
                    '200': '#dad3ae',
                    '300': '#c5b87f',
                    '400': '#b5a160',
                    '500': '#a48c4e',
                    '600': '#8d7141',
                    '700': '#715737',
                    '800': '#604933',
                    '900': '#54402f',
                    '950': '#2f2119',
                },

            },
        },
    },

    plugins: [forms],
};
