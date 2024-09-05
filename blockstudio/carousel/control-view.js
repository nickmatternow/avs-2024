document.addEventListener('DOMContentLoaded', function() {
    // Function to initialize Swiper
    
        var swiperElement = document.querySelector('.swiper');
        if (swiperElement) {
            console.log('Swiper element found:', swiperElement);
            var swiper = new Swiper(swiperElement, { 
                observer: true,
                navigation: {
                    prevEl: ".swiper-button-prev",
                    nextEl: ".swiper-button-next",
                },
                observeParents: true,
                watchSlidesProgress: true,
                grabCursor: true,
                pagination: { el: ".swiper-pagination" },
                keyboard: { enabled: true },
                spaceBetween: 30,
                autoHeight: true, // Enable variable height
            });
            console.log('Swiper initialized:', swiper);
        } else {
            console.error('Swiper element not found');
        }
    
});