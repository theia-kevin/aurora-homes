const {colors: defaultColors} = require('tailwindcss/defaultTheme');

module.exports = {
  corePlugins: {
    preflight: true,
  },
  purge: {
    enabled: true,
    content: [
      './resources/js/*.{js,vue}',
      './resources/js/**/*.{js,vue}',
      './resources/sass/*.scss',
      './resources/sass/**/*.scss',
      './*.php',
      './**/*.php',
    ]
  },
  important: true,
  darkMode: false,
  theme: {
    extend: {
      colors: {
        ...defaultColors,
        ...{
          'aurora-blue-01': {
            DEFAULT: '#5270b5',
          },
          'aurora-blue-02': {
            DEFAULT: '#100E47',
          },
          'aurora-blue-03': {
            DEFAULT: '#6898B0',
          },
          'aurora-blue-04': {
            DEFAULT: '#170B5B',
          },
          'aurora-blue-05': {
            DEFAULT: '#6898B0',
          },
          'aurora-blue-06': {
            DEFAULT: '#233850',
          },
          'aurora-orange-01': {
            DEFAULT: '#CE747A',
          },
          'aurora-red-01': {
            DEFAULT: '#C73D56',
          },
          'aurora-grey-01': {
            DEFAULT: '#4D4D4D',
          },
          'aurora-grey-02': {
            DEFAULT: '#333333',
          },
          'aurora-yellow-01': {
            DEFAULT: '#F39E2C',
          },
        },
        backgroundColor: {
          ...defaultColors,
          ...{
            'aurora-blue-01': {
              DEFAULT: '#5270b5',
            },
            'aurora-blue-02': {
              DEFAULT: '#100E47',
            },
            'aurora-blue-03': {
              DEFAULT: '#6898B0',
            },
            'aurora-blue-04': {
              DEFAULT: '#170B5B',
            },
            'aurora-blue-05': {
              DEFAULT: '#6898B0',
            },
            'aurora-blue-06': {
              DEFAULT: '#233850',
            },
            'aurora-orange-01': {
              DEFAULT: '#CE747A',
            },
            'aurora-red-01': {
              DEFAULT: '#C73D56',
            },
            'aurora-grey-01': {
              DEFAULT: '#4D4D4D',
            },
            'aurora-grey-02': {
              DEFAULT: '#333333',
            },
            'aurora-yellow-01': {
              DEFAULT: '#F39E2C',
            },
          },
        },
        borderColor: {
          ...defaultColors,
          ...{
            'aurora-blue-01': {
              DEFAULT: '#5270b5',
            },
            'aurora-blue-02': {
              DEFAULT: '#100E47',
            },
            'aurora-blue-03': {
              DEFAULT: '#6898B0',
            },
            'aurora-blue-04': {
              DEFAULT: '#170B5B',
            },
            'aurora-blue-05': {
              DEFAULT: '#6898B0',
            },
            'aurora-blue-06': {
              DEFAULT: '#233850',
            },
            'aurora-orange-01': {
              DEFAULT: '#CE747A',
            },
            'aurora-red-01': {
              DEFAULT: '#C73D56',
            },
            'aurora-grey-01': {
              DEFAULT: '#4D4D4D',
            },
            'aurora-grey-02': {
              DEFAULT: '#333333',
            },
            'aurora-yellow-01': {
              DEFAULT: '#F39E2C',
            },
          },
        },
      },
      fontFamily: {
        'sans': ['sans-serif',],
        'serif': ['sans-serif',],
        'mono': ['sans-serif',],
        'foco-regular': ['foco-regular','sans-serif',],
        'foco-regular-italic': ['foco-regular-italic','sans-serif',],
        'foco-bold': ['foco-bold','sans-serif',],
        'foco-bold-italic': ['foco-bold-italic','sans-serif',],
        'foco-light': ['foco-light','sans-serif',],
        'foco-light-italic': ['foco-light-italic','sans-serif',],
        'foco-black': ['foco-black','sans-serif',],
        'foco-black-italic': ['foco-black-italic','sans-serif',],
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1350px',
      },
    },
    variants: {
      extend: {
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss-debug-screens'),
  ],
};
