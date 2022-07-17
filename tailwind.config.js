const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        fontFamily: {
            sans: ['Avenir Next LT Pro', 'sans-serif'],
            serif: ['Adelle', 'serif'],
            mono: ['SFMono-Regular', 'ui-monospace'],
        },
        maxWidth: {
            '12rem': '12rem',
        },
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            },

            spacing: {},
            borderRadius: {},
            colors: {
                // prettier-ignore
                "yellow": '#ffd400',
                'yellow-orange': '#fbb040',
                // prettier-ignore
                "green": '#65a73e',
                'forest-green': '#328432',
                'gray-dark': '#2b2b2b',
                'gray-900': '#2b2b2b',
                'gray-800': '#414141',
                'gray-700': '#585858',
                'gray-600': '#717171',
                // prettier-ignore
                "gray": '#8a8b8a',
                'gray-500': '#8a8b8a',
                'gray-400': '#a4a4a4',
                'gray-300': '#c0c0c0',
                'gray-200': '#DBDBDB',
                'gray-light': '#f1f1f1',
                'gray-100': '#f1f1f1',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
