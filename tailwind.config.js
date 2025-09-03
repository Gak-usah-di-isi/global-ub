import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        fontFamily: {
            sans: ["Outfit", "Inter", "ui-sans-serif", "system-ui"],
        },
        extend: {
            colors: {
                primary: {
                    50: "#f2f6ff",
                    100: "#e6efff",
                    500: "#1f4ed8",
                    600: "#1842c0",
                    700: "#12379f",
                },
                body: "#f5f7fc",
            },
            boxShadow: {
                card: "0 1px 2px rgba(16,24,40,.05),0 0 0 1px rgba(16,24,40,.06)",
            },
        },
    },

    plugins: [forms],
};
