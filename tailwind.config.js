/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            dark: '#22272A',
            accentBlue: '#4653EF',
            accentGreen: '#C0E438',
            accentDarkerGreen: '#b4d534',
            accentDarkerBlue: '#333cdc',
            accentGray: '#F4F5F7',
        },
        fontFamily: {
            'montserrat': ["'Montserrat', sans-serif"],
            'alternates': ["'Montserrat Alternates', sans-serif"],
        }
    },
  },
  plugins: [],
}

