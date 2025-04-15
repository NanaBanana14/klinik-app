/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/**/*.php",
    "./layouts/**/*.php",
    "./web/**/*.php",
    "./**/*.php", 
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  purge: {
    enabled: true,
  },
}

