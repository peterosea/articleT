const defaultTheme = require('tailwindcss/defaultTheme');

const colorReset = {
  color: null,
};

function px(min, max) {
  let result = {};
  for (let i = min; i < max + 1; i++) {
    const key = i < 0 ? `-${i}px` : `${i}px`;
    result[key] = `${i}px`;
  }
  return result;
}

const colors = {};

module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.{php,vue,js}',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      // screens: {
      //   xxl: '1536px',
      //   labtop: '1440px',
      //   'max:labtop': { max: '1439px' },
      //   'max:xxl': { max: '1535px' },
      //   'max:xl': { max: '1279px' },
      //   'max:lg': { max: '1023px' },
      //   'max:md': { max: '767px' },
      //   'max:sm': { max: '639px' },
      // },
      // container: {
      //   padding: {
      //     DEFAULT: '2rem',
      //     sm: '2rem',
      //     lg: '4rem',
      //     xl: '5rem',
      //     '2xl': '7.1875rem',
      //   },
      // },
      // pixel token
      height: px(0, 300),
      width: px(0, 1000),
      margin: px(0, 300),
      fontSize: px(0, 120),
      padding: {
        'container-x': 'var(--container-px)',
        'container-y': 'var(--container-py)',
        ...px(0, 300),
      },
      gap: px(0, 300),
      maxWidth: px(0, 1000),
      maxHeight: px(0, 1000),
      translate: px(0, 300),
      minWidth: px(0, 1000),
      colors,
      borderColor: colors,
      backgroundColor: colors,
      gradientColorStops: colors,
      typography: {
        DEFAULT: {
          css: {
            maxWidth: null,
            color: null,
            a: {
              color: null,
              '&:hover': colorReset,
            },
            strong: colorReset,
            string: colorReset,
            h1: colorReset,
            h2: colorReset,
            h3: colorReset,
            h4: colorReset,
            h5: colorReset,
            h6: colorReset,
            pre: null,
            code: null,
            'code::after': null,
            'code::before': null,
            'pre code': null,
          },
        },
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
