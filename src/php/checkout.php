<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Shop - Kasse</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/script.js"></script>
    </head>
    <body onload="initializePage()">
            <!--Nav Bar-->
            <?php include ('nav.php'); ?>
    
        <!-- Kassenformular -->
        <div class="container">
            <h1>Orange Shop - Checkout</h1>
    
            <form id="checkoutForm">
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
                    <option value="orange-x1">Orange X1 - €699</option>
                    <option value="orange-pro">Orange Pro - €899</option>
                    <option value="orange-ultra">Orange Ultra - €1099</option>
                </select>
    
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
    </body>
</html>