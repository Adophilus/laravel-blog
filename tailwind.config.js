/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './public/post.html'
  ],
  theme: {
    extend: {
      fontFamily: {
        'dm-serif-display': ['DM Serif Display', 'sans-serif'],
        'pt-serif-caption': ['PT Serif Caption', 'sans-serif'],
        lato: ['Lato', 'sans-serif']
      }
    }
  },
  plugins: [require('daisyui')]
}
