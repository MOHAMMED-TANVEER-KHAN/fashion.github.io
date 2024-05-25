// <!-- Initialize Swiper -->
    // HomeSwiper
      var swiper = new Swiper(".HomeSwiper", {
        spaceBetween: 30,
        effect: "fade",
        centeredSlides: true,
        grabCursor: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });


      
    // TestimonialSwiper
      var swiper = new Swiper(".testimonialSwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
          clickable: true,
        },
      });
  