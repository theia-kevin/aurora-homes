const {colors: defaultColors} = require('tailwindcss/defaultTheme');

module.exports = {
  purge: {
    enabled: true,
    content: [
      './js/*.js',
      './js/**/*.vue',
      '*.php',
    ],
  },
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
        'sans': ['foco'],
        'serif': ['foco'],
        'mono': ['foco']
      },
    },
    variants: {},
    plugins: [],
  }
};
