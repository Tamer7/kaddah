/** @type {import('tailwindcss').Config} */
module.exports = {
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
      },
      padding: {
        '5': '2rem',
      },
      mixBlendMode: {
        multiply: 'multiply',
      },
    },
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    }
  },
  plugins: [
    require("tw-elements/dist/plugin.cjs"),
    function({ addUtilities, theme, e }) {
      const newUtilities = {};
      Object.entries(theme('mixBlendMode')).forEach(([key, value]) => {
        const className = `.blend-${e(key)}`;
        newUtilities[className] = { mixBlendMode: value };
      });
      addUtilities(newUtilities, ['responsive', 'hover']);
    },
  ],
}

