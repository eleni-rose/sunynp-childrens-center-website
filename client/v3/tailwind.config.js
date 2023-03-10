/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/*.{html,php}'],
  theme: {
    fontFamily: {
      'sans': ['Josefin\\ Sans', 'Helvetica', 'Arial', 'sans-serif']
    },
    screens: {
      sm: '480px',
      md: '768px',
      lg:'976px',
      xl:'1440px'
    },
    extend: {
      colors: {
        npOrange: '#eb8934',
        npBlue: '#3452eb',
        grayBlue: '#979fc4',
        grayTan: '#d4d4d4'
      }
    },
  },
  plugins: [],
}
