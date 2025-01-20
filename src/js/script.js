//Login Button Dropdown
function onLoginClick() {
    let element = document.getElementById("logindropdown")
    if (element.isOpen != true) {
        element.style.opacity = 1
        element.style.transform = "scaleY(1)"
        element.isOpen = true
    } else {
        element.style.opacity = 0
        element.style.transform = "scaleY(0)"
        element.isOpen = false
    }
}

//Cardslider
document.addEventListener('DOMContentLoaded', () => {
    const nextBtn = document.querySelector('#next-btn');
    const prevBtn = document.querySelector('#prev-btn');
    const slider = document.querySelector('#slider');
    if (nextBtn) {
        console.log('Next button found:', nextBtn);
    } else {
        console.error('Next button not found');
    }

    let currentIndex = 0;

    nextBtn.addEventListener('click', () => {
      const cards = document.querySelectorAll('.card');
      const cardWidth = cards.length > 0 ? cards[0].offsetWidth + 20 : 0;
      const maxIndex = cards.length - Math.floor(slider.offsetWidth / cardWidth);
      
      if (currentIndex < maxIndex) {
        currentIndex++;
        slider.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
      }
    });

    prevBtn.addEventListener('click', () => {
      const cards = document.querySelectorAll('.card');
      const cardWidth = cards[0].offsetWidth + 20;

      if (currentIndex > 0) {
        currentIndex--;
        slider.style.transform = `translateX(-${cardWidth * currentIndex}px)`;
      }
    });
});