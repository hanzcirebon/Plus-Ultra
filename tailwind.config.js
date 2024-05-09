/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      keyframes: {
        blink: {
          '0%, 100%': { borderColor: '#00ffae' },
          '50%': { borderColor: 'transparent' }
        },
      },
      animation: {
        blink: 'blink 0.7s steps(2, start) infinite',
      },
      transitionProperty: {
        'max-height': 'max-height'
      },
      colors: {
        'pink_template': 'rgb(255, 135, 176)',
        'purple_template': 'rgb(124,118,187)',
        'light_purple_template': 'rgb(174,170,213)'
      },
      screens: {
        'xs': '450px',
      },
      blur: {
        'xs': '2px',
      }
    },
  },
  plugins: [],
}

