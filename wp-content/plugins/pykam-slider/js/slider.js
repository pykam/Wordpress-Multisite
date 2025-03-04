document.addEventListener("DOMContentLoaded", () => {

  const swiper = new Swiper('.swiper', {
    speed: 400,
    spaceBetween: 100,
    loop: true,

    // autoplay: {
    //   delay: 5000,
    // },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });

});