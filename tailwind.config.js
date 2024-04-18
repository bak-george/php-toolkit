/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      darkBlue: '#484C89', 
      lightBlue: '#AEB2D5', 
      blue: '#777BB3',
      black: '#000000',
      white: 'FFFFFF'
    },
  },
  plugins: [],
}

