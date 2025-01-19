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
function initializePage() {
  const modellDropdown = document.getElementById('productModel');
  const mengenFeld = document.getElementById('productQuantity');
  const bestellübersicht = document.getElementById('orderSummary');
  const warenkorbTabelle = document.getElementById('cartContent');
  const gesamtWarenkorb = document.getElementById('totalAmount');
  const zumWarenkorbButton = document.getElementById('addToCartBtn');
  const preise = {
      'orange-x1': 699,
      'orange-pro': 899,
      'orange-ultra': 1099
  };
  const einkaufswagen = [];
  function aktualisiereBestellübersicht() {
      const ausgewähltesModell = modellDropdown.value;
      const menge = parseInt(mengenFeld.value, 10) || 1;
      if (ausgewähltesModell) {
          const modellText = modellDropdown.options[modellDropdown.selectedIndex].text;
          const gesamt = preise[ausgewähltesModell] * menge;
          document.getElementById('summaryModel').textContent = `Gerät: ${modellText}`;
          document.getElementById('summaryQuantity').textContent = `Menge: ${menge}`;
          document.getElementById('summaryTotal').textContent = `Gesamtpreis: €${gesamt.toFixed(2)}`;
      } else {
          bestellübersicht.querySelectorAll('p').forEach(p => p.textContent = '-');
      }
  }
  function aktualisiereWarenkorb() {
      warenkorbTabelle.innerHTML = '';
      if (einkaufswagen.length === 0) {
          warenkorbTabelle.innerHTML = '<tr><td colspan="4">Ihr Warenkorb ist leer.</td></tr>';
          gesamtWarenkorb.textContent = '0.00';
          return;
      }
      let gesamtpreis = 0;
      einkaufswagen.forEach((artikel, index) => {
          const zeile = document.createElement('tr');
          zeile.innerHTML = `
              <td>${artikel.name}</td>
              <td>${artikel.menge}</td>
              <td>€${(artikel.preis * artikel.menge).toFixed(2)}</td>
              <td><button onclick="entferneArtikel(${index})">Entfernen</button></td>
          `;
          warenkorbTabelle.appendChild(zeile);
          gesamtpreis += artikel.preis * artikel.menge;
      });
      gesamtWarenkorb.textContent = gesamtpreis.toFixed(2);
  }
  function zumWarenkorbHinzufügen() {
      const ausgewähltesModell = modellDropdown.value;
      const modellName = modellDropdown.options[modellDropdown.selectedIndex].text;
      const menge = parseInt(mengenFeld.value, 10);
      if (!ausgewähltesModell || menge < 1) {
          alert('Bitte wählen Sie ein Modell und eine gültige Menge aus.');
          return;
      }
      const vorhandenerArtikel = einkaufswagen.find(artikel => artikel.id === ausgewähltesModell);
      if (vorhandenerArtikel) {
          vorhandenerArtikel.menge += menge;
      } else {
          einkaufswagen.push({
              id: ausgewähltesModell,
              name: modellName,
              menge,
              preis: preise[ausgewähltesModell]
          });
      }
      aktualisiereWarenkorb();
      aktualisiereBestellübersicht();
  }
  function entferneArtikel(index) {
      einkaufswagen.splice(index, 1);
      aktualisiereWarenkorb();
  }
  modellDropdown.addEventListener('change', aktualisiereBestellübersicht);
  mengenFeld.addEventListener('input', aktualisiereBestellübersicht);
  zumWarenkorbButton.addEventListener('click', zumWarenkorbHinzufügen);
}