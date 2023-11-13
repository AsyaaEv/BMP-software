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
        'secondary' : '#EFF2FE',
        'border' : '#99B0FF',
        'third' : '#1AA7EC',
        'secondTxt' : '#75798E',
      }
    },
  },
  plugins: [],
}

