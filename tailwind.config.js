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
        flip: {
          from: { transform: 'rotateY(0deg)' },
          to: { transform: 'rotateY(180deg)' }
        },
      },
      animation: {
        blink: 'blink 0.7s steps(2, start) infinite',
        flip: 'flip 0.8s ease-in-out',
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
  variants: {
    extend: {
      transformStyle: ['hover', 'focus'],
      backfaceVisibility: ['hover', 'focus'],
    },
  },
  plugins: [],
}

