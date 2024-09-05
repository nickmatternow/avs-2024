document.addEventListener('DOMContentLoaded', function() {
  new Splide('#splide-carousel', {
      type   : 'loop',
      perPage: 3, // Number of slides visible at a time
      perMove: 1, // Number of slides to move on each transition
      gap    : '20px', // Space between slides
      fixedWidth: 394, // Fixed width for slides
      autoplay: false, // Enable autoplay
      interval: 3000, // Interval for autoplay
      pauseOnHover: true, // Pause autoplay on hover
  }).mount();
});