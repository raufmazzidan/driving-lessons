/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    colors: {
      white: '#FFFFFF',
      purple: '#5c53fa',
      purpleLight: '#6e66fa',
      darkGrey: '#888888',
      grey: '#d9d9d9',
      black: '#1a1e21',
      wa: '#25D366',
      bronze: '#6A3805',
      silver: '#B4B4B4',
      gold: '#AF9500',
    },
    extend: {
      fontFamily: {
        bebas: ['Bebas Neue', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
