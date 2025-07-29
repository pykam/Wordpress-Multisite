# Wordpress theme with tailwindcss support

Implemented support for tailwindcss style compilation

```
cd ../wp-content/themes/multisite
npm install
npx tailwindcss -i style.css -o multisite.css -w
```

## Wordpress Multisite

Depending on the subdomain, the site footer changes

## Swiper.js Slider

A plugin has been developed that adds a slider based on Swiper.js

Adding sliders is implemented as a separate post type `slider`
The output is carried out using a shortcode. See the Slider creation page, there is a hint with the shortcode code