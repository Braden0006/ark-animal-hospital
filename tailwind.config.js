/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'navigation-bg': '#2D2D2D',
        'button-bg': '#008080',
      },
      fontSize: {
        '2.5rem': ['2.5rem', {
          lineHeight: '3rem',
        }],
      }
    },
  },
  plugins: [],
}

