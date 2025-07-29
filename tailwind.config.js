/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#000000',
        'sec-grey': '#0F0F0F',
        'sec-gray2': '#A1A1A1',
        'sec-gray3': '#1B1B1B',
        'sec-yellow': '#FFB71A',
        'sec-white': '#F2F4F0',
      },
      fontFamily: {
        neutral: ['NeutralSans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

