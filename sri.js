document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
      direction: 'horizontal', // Set direction to horizontal
      loop: true, // Enable looping
      centeredSlides: true, // Center the active slide
      slidesPerView: 'auto', // Adjust the number of visible slides dynamically
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  
    // Handle slide click events
    const slides = document.querySelectorAll('.swiper-slide');
    slides.forEach((slide) => {
      slide.addEventListener('click', () => {
        // Get the data-slide attribute to determine the slide number
        const slideNumber = slide.getAttribute('data-slide');
        // Redirect to the appropriate module's page (you can customize the URLs)
        switch (slideNumber) {
          case '1':
            window.location.href = 'know_your_rights.html';
            break;
          case '2':
            window.location.href = 'digital_assistance.html';
            break;
          case '3':
            window.location.href = 'recent_updates.html';
            break;
          case '4':
            window.location.href = 'case_consultation.html';
            break;
          case '5':
            window.location.href = 'case_histories.html';
            break;
          default:
            break;
        }
      });
    });
});
  