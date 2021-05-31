const colors = require("tailwindcss/colors")
const plugin = require('tailwindcss/plugin')

module.exports = {
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            teal: colors.teal,
        },
    },
  },
  variants: {
    extend: {
        display: ["group-hover"],
    },
  },
//   https://smarative.com/blog/learn-pseudo-with-tailwind-css
  plugins: [
    require('tailwindcss-pseudo-elements'),
    plugin(({addUtilities}) => {
    const newUtilities = {
        ".empty-content": {
        content: "''",
        },
    }
    addUtilities(newUtilities, {
        variants: ["before", "after"],
    });
    })
  ],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
}
