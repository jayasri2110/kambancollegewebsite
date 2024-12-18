document.addEventListener('DOMContentLoaded', function() {
  let slides = document.querySelectorAll('.slider-wrapper img');
  let currentIndex = 0;
  
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.display = i === index ? 'block' : 'none';
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  setInterval(nextSlide, 3000);  // Change slide every 3 seconds
});
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.menu-parent').forEach(function (menu) {
      menu.addEventListener('click', function () {
          const childMenu = this.querySelector('.menu-child');
          if (childMenu) {
              childMenu.style.display = (childMenu.style.display === 'block') ? 'none' : 'block';
          }
      });
  });
});
