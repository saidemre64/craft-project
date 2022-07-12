const defaultTheme = require("tailwindcss/defaultTheme")

const siteColors = {
  primary: {
    DEFAULT: '#0b3656',
    hover: '#006ac0'
  },
  secondary: {
    DEFAULT: '#2da9c5',
    hover: '#ffffff'
  }
}

module.exports = {
  content: [
    'frontend/css/**/*.css',
    'frontend/js/**/*.{ts,js}',
    'templates/**/*'
  ],
  theme: {
    container: {
      center: true,
      padding: defaultTheme.spacing['4'],
    },
    borderRadius: {
      'none': '0',
      'sm': '0.125rem',
      DEFAULT: '0.25rem',
      'md': '0.375rem',
      'lg': '2rem',
      'full': '9999px',
      'large': '12px',
    },
    extend: {
      colors: {
        ...siteColors,
        black: '#333333',
        light: '#f5f5f5'
      },
      maxWidth: {
        logo: '300px'
      },
      height: {
        '128': '32rem',
      },
    },
  },
  plugins: [],
}