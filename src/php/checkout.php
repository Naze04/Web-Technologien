<!DOCTYPE html>
<html lang="de">
<head>
    <title>Orange Shop - Kasse</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Orange Shop - Checkout</title>
    <link rel="stylesheet" href="../css/checkout.css" type="text/css">
    <link rel="stylesheet" href="../css/nav.css" type="text/css">
    <script src="../js/script.js"></script>
</head>
<body onload="onLoad()">
    <!--Navigations-Leiste-->
    <nav id="nav"></nav>

    <!-- Checkout-Formular-->
=======
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>
<body onload="initializePage()">
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>
   
    <!-- Kassenformular -->
>>>>>>> Kai-Branch
    <div class="container">
        <h1>Orange Shop - Checkout</h1>

        <form id="checkoutForm">
<<<<<<< HEAD
            <label for="name">Vor- und Nachname</label>
            <input type="text" id="name" name="name" placeholder="Geben Sie Ihren Vor- und Nachnamen ein" required>

            <label for="email">E-Mail-Addresse</label>
            <input type="email" id="email" name="email" placeholder="Geben Sie Ihre E-Mail-Adresse ein" required>

            <label for="phone">Telefonnummer</label>
            <input type="tel" id="phone" name="phone" placeholder="Geben Sie Ihre Telefonnummer ein" required>

            <label for="address">Versandaddresse</label>
            <input type="text" id="address" name="address" placeholder="Geben Sie Ihre Lieferadresse ein" required>

            <label for="model">Wähle Gerät</label>
            <select id="model" name="model" required>
                <option value="">--Wähle Gerät--</option>
=======
            <label for="customerName">Name</label>
            <input type="text" id="customerName" name="customerName" placeholder="Vor- und Nachname eingeben" required>

            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="E-Mail-Adresse eingeben" required>

            <label for="phone">Telefonnummer</label>
            <input type="tel" id="phone" name="phone" placeholder="Telefonnummer eingeben" required>

            <label for="address">Lieferadresse</label>
            <input type="text" id="address" name="address" placeholder="Adresse eingeben" required>

            <label for="productModel">Gerät auswählen</label>
            <select id="productModel" name="productModel" required>
                <option value="">--Gerät wählen--</option>
>>>>>>> Kai-Branch
                <option value="orange-x1">Orange X1 - €699</option>
                <option value="orange-pro">Orange Pro - €899</option>
                <option value="orange-ultra">Orange Ultra - €1099</option>
            </select>

<<<<<<< HEAD
            <label for="quantity">Anzahl</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" required>

            <div class="summary" id="orderSummary">
                <h2>Bestellübersicht</h2>
                <p><strong>Modell:</strong> <span id="summaryModel">Nichts ausgewählt</span></p>
                <p><strong>Menge:</strong> <span id="summaryQuantity">1</span></p>
    

    <!-- Script -->
    <script>
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

            summaryModel.textContent = selectedModel ? modelSelect.options[modelSelect.selectedIndex].text : 'Nichts ausgewählt';
            summaryQuantity.textContent = quantity;

            const total = selectedModel ? prices[selectedModel] * quantity : 0;
            summaryTotal.textContent = total.toFixed(2);
        }

        modelSelect.addEventListener('change', updateSummary);
        quantityInput.addEventListener('input', updateSummary);

        const checkoutForm = document.getElementById('checkoutForm');
        checkoutForm.addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Ihre Bestellung wurde erfolgreich aufgegeben!');
        });
    </script>


<!-- Warenkorb -->



<div class="cart" id="shoppingCart">
    <h2>Warenkorb</h2>
    <table>
        <thead>
            <tr>
                <th>Produkt</th>
                <th>Menge</th>
                <th>Preis</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody id="cartItems">
            <tr>
                <td colspan="4">Ihr Warenkorb ist leer.</td>
            </tr>
        </tbody>
    </table>
</div>



<!-- Checkout-Formular -->
<div class="container">
    <form id="checkoutForm">
        <!-- Exisitierende Formularfelder -->
        <button type="button" id="addToCartButton">Zum Warenkorb hinzufügen</button>
        <button type="submit">Bestellung absenden</button>
    </form>
</div>

<script>
    const cart = [];
    const cartItems = document.getElementById('cartItems');
    const addToCartButton = document.getElementById('addToCartButton');

    function updateCart() {
        cartItems.innerHTML = ''; // Entferne existierende Warenkorbinhalte

        if (cart.length === 0) {
            cartItems.innerHTML = '<tr><td colspan="4">Ihr Warenkorb ist leer.</td></tr>';
            return;
        }

        cart.forEach((item, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${item.modelText}</td>
                <td>${item.quantity}</td>
                <td>€${(item.price * item.quantity).toFixed(2)}</td>
                <td><button type="button" onclick="removeFromCart(${index})">Entfernen</button></td>
            `;
            cartItems.appendChild(row);
        });
    }

    function addToCart() {
        const selectedModel = modelSelect.value;
        const modelText = modelSelect.options[modelSelect.selectedIndex].text;
        const quantity = parseInt(quantityInput.value, 10);

        if (!selectedModel) {
            alert('Bitte wählen Sie ein Modell aus.');
            return;
        }

        // Überprüfe, ob Artikel schon im Warenkorb ist
        const existingItemIndex = cart.findIndex(item => item.model === selectedModel);
        if (existingItemIndex !== -1) {
            cart[existingItemIndex].quantity += quantity; // Aktualisiere Menge
        } else {
            cart.push({
                model: selectedModel,
                modelText,
                quantity,
                price: prices[selectedModel],
            });
        }

        updateCart(); // Aktualisiere Warenkorbansicht
        updateSummary(); // Aktualisiere Übersicht
    }

    function removeFromCart(index) {
        cart.splice(index, 1); // Entferne Artikel aus Warenkorb
        updateCart(); // Aktualisiere Warenkorbansicht
        updateSummary(); // Aktualisiere Übersicht
    }

    addToCartButton.addEventListener('click', addToCart);

    const cartTotal = document.createElement('div');
cartTotal.id = 'cartTotal';
cartTotal.innerHTML = `<h3>Gesamtpreis: €<span id="totalPrice">0.00</span></h3>`;
document.querySelector('.cart').appendChild(cartTotal);

function calculateTotalPrice() {
    const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0);
    document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);
}

function updateCart() {
    cartItems.innerHTML = ''; // Entferne existierende Warenkorbinhalte

    if (cart.length === 0) {
        cartItems.innerHTML = '<tr><td colspan="4">Ihr Warenkorb ist leer.</td></tr>';
        calculateTotalPrice(); // Aktualisiere Gesamtpreis
        return;
    }

    cart.forEach((item, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.modelText}</td>
            <td>${item.quantity}</td>
            <td>€${(item.price * item.quantity).toFixed(2)}</td>
            <td><button type="button" onclick="removeFromCart(${index})">Entfernen</button></td>
        `;
        cartItems.appendChild(row);
    });

    calculateTotalPrice(); // Aktualisiere Gesamtpreis
}

function addToCart() {
    const selectedModel = modelSelect.value;
    const modelText = modelSelect.options[modelSelect.selectedIndex].text;
    const quantity = parseInt(quantityInput.value, 10);

    if (!selectedModel) {
        alert('Bitte wählen Sie ein Modell aus.');
        return;
    }

    // Überprüfe, ob Artikel schon im Warenkorb ist
    const existingItemIndex = cart.findIndex(item => item.model === selectedModel);
    if (existingItemIndex !== -1) {
        cart[existingItemIndex].quantity += quantity; // Aktualisiere Menge
    } else {
        cart.push({
            model: selectedModel,
            modelText,
            quantity,
            price: prices[selectedModel],
        });
    }

    updateCart(); // Aktualisiere Warenkorbansicht
    updateSummary(); // Aktualisiere Übersicht
}

function removeFromCart(index) {
    cart.splice(index, 1); // Entferne Artikel aus Warenkorb
    updateCart(); // Aktualisiere Warenkorbansicht
    updateSummary(); // Aktualisiere Übersicht
}

addToCartButton.addEventListener('click', addToCart);



</script>


=======
            <label for="productQuantity">Menge</label>
            <input type="number" id="productQuantity" name="productQuantity" min="1" max="10" value="1" required>

            <div class="order-summary" id="orderSummary">
                <h2>Bestellübersicht</h2>
                <p id="summaryModel">Gerät: -</p>
                <p id="summaryQuantity">Menge: -</p>
                <p id="summaryTotal">Gesamtpreis: €0.00</p>
            </div>
        </form>

        <button type="button" id="addToCartBtn">Zum Warenkorb hinzufügen</button>
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
    <?php include ('footer.php'); ?>
>>>>>>> Kai-Branch
</body>
</html>