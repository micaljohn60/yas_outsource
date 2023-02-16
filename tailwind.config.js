/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        primary:'#05C19C',
        secondary: {
          100: '#E2E2D5',
          200: '#888883',
          300: '#a1ebff',
          400: '#a1ffbd'
        },
        
      }
    },
  },
  plugins: [],
}
