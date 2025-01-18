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

//On Load or checkout
function onCheckoutLoad() {
  const modelSelect = document.getElementById('model');
  const quantityInput = document.getElementById('quantity');
  const summaryModel = document.getElementById('summaryModel');
  const summaryQuantity = document.getElementById('summaryQuantity');
  const summaryTotal = document.getElementById('summaryTotal');

  const prices = {
      'orange-x1': 699,
      'orange-pro': 899,
      'orange-ultra': 1099
  };

  function updateSummary() {
      const selectedModel = modelSelect.value;
      const quantity = parseInt(quantityInput.value, 10) || 1;
  
      summaryModel.textContent = selectedModel ? modelSelect.options[modelSelect.selectedIndex].text : 'None';
      summaryQuantity.textContent = quantity;
  
      const total = selectedModel ? prices[selectedModel] * quantity : 0;
      summaryTotal.textContent = total.toFixed(2);
  }

  modelSelect.addEventListener('change', updateSummary);
  quantityInput.addEventListener('input', updateSummary);
  const checkoutForm = document.getElementById('checkoutForm');
  
  checkoutForm.addEventListener('submit', function(event) {
      event.preventDefault();
      alert('Ihre Bestellung wurde erfolgreich aufgeben!');
  });
}