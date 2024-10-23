/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'navigation-bg': '#2D2D2D',
        'button-bg': '#008080',
        'paragraph-color': '#333333',
      },
      fontSize: {
        '2.5rem': ['2.5rem', {
          lineHeight: '3rem',
        }],
      },
      lineHeight: {
        'loosey-goosey': '5rem',
      },
      height: {
        '68': '17rem',
        '70': '17.5rem',
      }
    },
  },
  plugins: [],
}

