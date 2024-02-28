/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '6rem',
      },
    },
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

