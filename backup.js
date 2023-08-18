/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,php,js}",
              "./profile/*",
              "./includes/*",
              "./js/*"
            ],
    theme: {
      extend: {
        screens: {
          'sm': '640px',
          'md': '768px',
          'lg': '1024px',
          'xl': '1280px',
        },
        colors:{
          'dead-blue':'#d4e7ff',
          'niceblue': '#134074',
          'lightblue': '#362FD9',
          'creamWhite': '#EEF4ED',
          'lightGreen': '#03C988',
          'gray': '#EEEEEE',
        },
        width:{
          '26':'6.5rem',
        },
        height:{
          '97': '30rem',
          '98': '42.375rem',
        },
        keyframes: {
          'open-menu': {
            '0%': { transform: 'scaleY(0)' },
            '80%': { transform: 'scaleY(1)' },
            '100%': { transform: 'scaleY(1)' },
          },
        },
        animation: {
          'open-menu': 'open-menu 0.3s ease-in-out forwards',
        },
        backgroundImage: {
          'test-image': "url('./img/card-img/test-image.jpg')",
        },
        fontSize: {
          '2xs': '0.5rem',
        },
        fontFamily: {
          oswald: "'Oswald', 'serif'",
          popping: "'Poppins', serif",
        }
      },
    },
    plugins: [],
  }
  
  