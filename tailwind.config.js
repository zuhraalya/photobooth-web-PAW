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
                // Design system Postal Club
                display: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                body: ['Inter', ...defaultTheme.fontFamily.sans],
                script: ['"Dawning of a New Day"', '"Segoe Script"', 'cursive'],
                tangerine: ['Tangerine', 'cursive'],
            },
            colors: {
                postal: {
                    bg: '#fff7eb',
                    paper: '#ffefd7',
                    brown: '#563319',
                    blue: '#9bbbc5',
                    sky: '#cfe3e9',
                    teal: '#456c79',
                    rose: '#db7476',
                },
            },
        },
    },

    plugins: [forms],
};
