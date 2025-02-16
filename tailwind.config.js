/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: [
    "./book/**/*.{html,js,twig,tsx,md}",
    "./template/**/*.{html,js,twig,tsx}",
  ],
  safelist: [
    'code.language-php',
    // {
    //   pattern: /language-+/,
    // },
  ],
  theme: {
    // colors: {
    //   'white': '#1fb6ff',
    //   'primary': '#59aad3',
    //   'secondary': '#ff9800',
    //   // 'purple': '#7e5bef',
    //   // 'pink': '#ff49db',
    //   // 'orange': '#ff7849',
    //   // 'green': '#13ce66',
    //   // 'yellow': '#ffc82c',
    //   // 'gray-dark': '#273444',
    //   // 'gray': '#8492a6',
    //   // 'gray-light': '#d3dce6',
    // },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
      logo: ['Fredoka-Regular', 'sans-serif'],
    },
    extend: {
      fontSize: {
        base: '11pt',
        lg: '1.2rem',
        xl: '1.5rem',
        '2xl': '1.7rem',
        '3xl': '2rem',
      },
      colors: {
        'primary': '#008000',
        // 'secondary': '#ff9800', // povodna oranzova
        'secondary': '#7FB562', // povodna oranzova
      },
      spacing: {
        '8xl': '96rem',
        '9xl': '128rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },
  plugins: [
    require('tailwind-scrollbar'),
    // require('preline/plugin'),
  ],
}

