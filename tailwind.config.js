import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: "class",

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lora: ["Lora", "sans-serif"],
                mulish: ["Mulish", "sans-serif"],
                nunito: ["Nunito", "sans-serif"],
                custom: ["Russo One", "sans-serif"],
            },
            colors: {
                // mainColor: '#1feab6',
                mainColor: "#1cecb7",
            },
        },
    },

    plugins: [forms],
};
