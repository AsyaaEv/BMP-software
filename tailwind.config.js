/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'madefor': 'Wix Madefor Display'
      },
      colors: {
        'dasar' : '#4971F7',
        'text' : '#292929',
        'bg' : '#fdfdfd',
      }
    },
  },
  plugins: [],
}

