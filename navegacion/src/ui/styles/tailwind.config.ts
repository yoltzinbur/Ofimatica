import type { Config } from 'tailwindcss';

const config: Config = {
  content: [
    './src/**/*.{js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {
      animation: {
        'rise-particle': 'rise linear infinite',
        'fall-rain': 'fall linear infinite',
        'drip-glass': 'drip linear forwards',
        'lightning-flash': 'flash 0.3s ease-out',
      },
      zIndex: {
        'hero-overlay': '1',
        'storm-behind': '5', 
        'storm-front': '8',  
        'hero-content': '30', 
      }
    },
  },
  plugins: [],
};

export default config;