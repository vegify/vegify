module.exports = {
  content: [
    "./app/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    colors: {
      'yellow': '#ffd400',
      'yellow-orange': '#fbb040',
      'green': '#65a73e',
      'forest-green': '#328432',
      'gray-dark': '#2b2b2b',
      'gray': '#8a8b8a',
      'gray-light': '#f1f1f1',
    },
    fontFamily: {
      'sans': ['Avenir Next LT Pro', 'sans-serif'],
      'serif': ['Adelle','serif'],
      'mono': ['SFMono-Regular','ui-monospace']
    },
    maxWidth: {
      '12rem': '12rem',
    },
    extend: {
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
      },
      spacing: {      },
      borderRadius: {      }
    },
  },
  plugins: [],
}
