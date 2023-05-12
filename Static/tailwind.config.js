/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      colors:{
        blue:'#1D75DE',
        dark:'#191414',
        light:'#ffffff',
        green: '#1ED760',
      }
    },
    // container:{
    //   center: true,
    //   padding: '15px',
    //   mx:'140rem',
    // }
  },
  plugins: [],
}
