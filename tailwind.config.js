/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./partials/**/*.{php,js}",
    "./*.{php,js}",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'homeBack':"url('./src/images/homeBack.jpg')"
      }
    },
  },
  plugins: [],
}
