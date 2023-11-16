/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}"], //you can add multiple folders e.g. "./{folder_name}/*.{php,html,js}"
  theme: {
    screens: {
      xs: "360px",
      sm: "560px",
      md: "768px",
      lg: "1060px",
      xl: "1200px",
      xxl: "1440px",
      xxxl: "1600px",
      xxxxl: "2000px",
    },
    extend: {},
  },
  plugins: [],
};
