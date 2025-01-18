<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orange Shop - Kasse</title>
    <link rel="stylesheet" href="../css/checkout.css" type="text/css">
    <link rel="stylesheet" href="../css/nav.css" type="text/css">
    <script src="../js/script.js"></script>
</head>
<body onload="initializePage()">
    <!-- Navigationsleiste -->
    <nav id="navigation"></nav>
   
    <!-- Kassenformular -->
    <div class="container">
        <h1>Orange Shop - Checkout</h1>
    
        <form id="checkoutForm">
            <label for="kundeName">Name</label>
            <input type="text" id="kundeName" name="kundeName" placeholder="Vor- und Nachname eingeben" required>
    
            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="E-Mail-Adresse eingeben" required>
    
            <label for="telefon">Telefonnummer</label>
            <input type="tel" id="telefon" name="telefon" placeholder="Telefonnummer eingeben" required>
    
            <label for="adresse">Lieferadresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="Adresse eingeben" required>
    
            <label for="produktModell">Gerät auswählen</label>
            <select id="produktModell" name="produktModell" required>
                <option value="">--Gerät wählen--</option>
                <option value="orange-x1">Orange X1 - €699</option>
                <option value="orange-pro">Orange Pro - €899 </option>
                <option value="orange-ultra">Orange Ultra - e1099 €</option>
            </select>
    
            <label for="produktMenge">Menge</label>
            <input type="number" id="produktMenge" name="produktMenge" min="1" max="10" value="1" required>
    
            <div class="bestellübersicht" id="bestellÜbersicht">
                <h2>Bestellübersicht</h2>
                <p id="zusammenfassungModell">Gerät: -</p>
                <p id="zusammenfassungMenge">Menge: -</p>
                <p id="zusammenfassungGesamt">Gesamtpreis: €0,00</p>
            </div>
        </form>
    
        <button type="button" id="zumWarenkorbButton">Zum Warenkorb hinzufügen</button>
        <button type="submit">Bestellung absenden</button>
    </div>
    
    <!-- Warenkorb -->
    <div class="cart">
        <table>
            <thead>
                <tr>
                    <th>Produkt</th>
                    <th>Menge</th>
                    <th>Preis</th>
                    <th>Optionen</th>
                </tr>
            </thead>
            <tbody id="cartContent">
                <tr>
                    <td colspan="4">Ihr Warenkorb ist leer.</td>
                </tr>
            </tbody>
        </table>
        <div id="cartTotal">
            <h3>Gesamtsumme: €<span id="totalAmount">0.00</span></h3>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
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
    </script>
</body>
</html>