/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'navigation-bg': '#2D2D2D',
        'button-bg': '#008080',
        'paragraph-color': '#333333',
        'service-card-bg': '#2D2D2D',
      },
      fontSize: {
        '2.5rem': ['2.5rem', {
          lineHeight: '3rem',
        }],
      },
      lineHeight: {
        'loosey-goosey': '5rem',
        '4rem': '4rem',
      },
      height: {
        '26': '26rem',
        '68': '17rem',
        '70': '17.5rem',
      },
      maxWidth: {
        '52rem': '52rem',
      }
    },
  },
  plugins: [],
}

