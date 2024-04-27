/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/php/*.php","./src/js/*.js"],
  theme: {
    extend: {
      colors: {
        'rouge': '#E27D60',
        'bleu': '#85DCCB',
        'orange': '#E8A87C',
        'violet': '#C38D9E',
        'vert': '#41B3A3',
      },
      fontFamily: {
        'display': ['Marcellus', 'serif'],
        'heading': ['Barlow Semi Condensed', 'serif'],
        'sans': ['Overpass', 'sans-serif']
      }
    },
  },
  plugins: [],
}