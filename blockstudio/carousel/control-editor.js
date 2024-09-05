// document.addEventListener('DOMContentLoaded', function() {
//     // Function to initialize Swiper
//     function initializeSwiper() {
//         var swiperElement = document.querySelector('.swiper');
//         if (swiperElement) {
//             console.log('Swiper element found:', swiperElement);
//             var swiper = new Swiper(swiperElement, { 
//                 observer: true,
//                 navigation: {
//                     prevEl: ".swiper-button-prev",
//                     nextEl: ".swiper-button-next",
//                 },
//                 observeParents: true,
//                 watchSlidesProgress: true,
//                 grabCursor: true,
//                 pagination: { el: ".swiper-pagination" },
//                 keyboard: { enabled: true },
//             });
//             console.log('Swiper initialized:', swiper);
//         } else {
//             console.error('Swiper element not found');
//         }
//     }

//     // Debounce function to limit the rate of initializeSwiper calls
//     function debounce(func, wait) {
//         let timeout;
//         return function(...args) {
//             clearTimeout(timeout);
//             timeout = setTimeout(() => func.apply(this, args), wait);
//         };
//     }

//     const debouncedInitializeSwiper = debounce(initializeSwiper, 100);

//     // Use MutationObserver to detect changes in the DOM
//     const observer = new MutationObserver((mutations) => {
//         mutations.forEach((mutation) => {
//             if (mutation.type === 'childList') {
//                 mutation.addedNodes.forEach((node) => {
//                     if (node.nodeType === 1 && node.querySelector('.swiper')) {
//                         debouncedInitializeSwiper();
//                     }
//                 });
//             }
//         });
//     });

//     // Start observing the document body for changes
//     observer.observe(document.body, { childList: true, subtree: true });

//     // Use wp.data to subscribe to changes in the editor store
//     if (window.wp && window.wp.data) {
//         const { select, subscribe } = wp.data;
//         const { getBlocks } = select('core/block-editor');
//         let previousBlocks = getBlocks();

//         subscribe(() => {
//             const currentBlocks = getBlocks();
//             if (currentBlocks !== previousBlocks) {
//                 // Blocks have changed, initialize Swiper
//                 debouncedInitializeSwiper();
//                 previousBlocks = currentBlocks;
//             }
//         });

//         // Initialize Swiper on first load
//         wp.domReady(() => {
//             debouncedInitializeSwiper();
//         });
//     } else {
//         // Fallback if wp.data is not available
//         debouncedInitializeSwiper();
//     }
// });