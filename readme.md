# Wordpress theme with tailwindcss support

Реализована поддержка компиляции стилей tailwindcss

```
cd ../wp-content/themes/multisite
npm install
npx tailwindcss -i style.css -o multisite.css -w
```

## Wordpress Multisite

Depending on the subdomain, the site footer changes

## Swiper.js Slider

A plugin has been developed that adds a slider based on Swiper.js

Добавление слайдеров реализована в виде отдельного типа записей `slider`
Вывод осуществляется с помощью шорткода. См. страницу создания Слайдера, там есть подсказка с кодом шорткода