/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        blue: '#27aee4'
      }
    },
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    }
  },
  plugins: [
    require("tw-elements/dist/plugin.cjs")
  ],
}

