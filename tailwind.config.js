import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("daisyui")
    ],

    daisyui: {
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS

        themes: [
            {
                ligth: {
                    "primary": "#128c80",          
                    "secondary": "#177ca8",                             
                    "accent": "#5fef97",                             
                    "neutral": "#181424",                             
                    "base-100": "#ffffff",                             
                    "info": "#4471c1",                             
                    "success": "#5fe7d7",                             
                    "warning": "#f9cc43",                             
                    "error": "#eb6f71",
                },
                dark: {
                    "primary": "#ade8ed",         
                    "secondary": "#b2ce14",        
                    "accent": "#041fd1",           
                    "neutral": "#1d1f2a",      
                    "base-100": "#353a4b",       
                    "info": "#35b6d0",           
                    "success": "#3bcea4",       
                    "warning": "#e7ac23",      
                    "error": "#e1376a",
                },
            },
          ],
    },
};
