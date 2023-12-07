/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../aiims/**/*.{scss,js,php}"],
  theme: {
    container: {
      center: true,
      padding: "12px"
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        primary: '#b00020',
        secondary: '#0336ff',
        tertiary: '#001e95',
        quaternary: "#292f60",
        orange: "#fb9e9c",
        green: "#005453",
        'quaternary-dark': "#222654",
        dark: '#040505',
        white: '#ffffff',
        black: '#000000',
        grey: '#5f656c',
        'light-grey': '#f5f5f5'
      },
      fontFamily: {
        rubik: ['Rubik', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

