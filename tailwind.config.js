import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        daisyui
    ],
    daisyui: {
        themes: ["black", "light"]
    },
}

