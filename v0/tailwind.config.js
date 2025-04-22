/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  content: [
    "./book/**/*.{html,js,twig,tsx,md}",
    "./template/**/*.{html,js,twig,tsx}",
  ],
  safelist: [
    'code.language-php',
  ],
  plugins: [
    // require('tailwind-scrollbar'),
    // require('preline/plugin'),
  ],
}

