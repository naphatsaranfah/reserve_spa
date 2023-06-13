/** @type {import('tailwindcss').Config} */
export default {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        sm: "540px",

        md: "720px",

        lg: "960px",
      },
    },
  },
  plugins: [],
}

