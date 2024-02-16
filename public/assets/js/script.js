const product = document.querySelector("#product");

for (let i = 0; i <= 10; i++) {
    // swipperSlide.innerHTML += ``;

    product.innerHTML += ` `;
}

const swiper = new Swiper(".swiper", {
    // Optional parameters
    slidesPerView: 2, // Jumlah slide yang ditampilkan pada satu waktu
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    autoHeight: true,
    breakpoints: {
        // when window width is >= 320px
        540: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is >= 480px
        720: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is >= 640px
        992: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    // scrollbar: {
    //   el: ".swiper-scrollbar",
    // },
});
