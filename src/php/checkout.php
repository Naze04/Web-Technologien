<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orange Shop - Checkout</title>
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body onLoad="onCheckoutLoad()">
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>
            
        <!-- Checkout Form -->
        <div class="container">
            <h1>Orange Shop - Checkout</h1>
    
            <form id="checkoutForm">
                <label for="name">Vor- und Zuname</label>
                <input type="text" id="name" name="name" placeholder="Geben Sie Ihren Vor- und Zunamen ein" required>
    
                <label for="email">E-Mail-Addresse</label>
                <input type="email" id="email" name="email" placeholder="Geben Sie Ihre E-Mail-Adresse ein" required>
    
                <label for="phone">Telefonnummer/label>
                <input type="tel" id="phone" name="phone" placeholder="Geben Sie Ihre Telefonnummer ein" required>
    
                <label for="address">Versandaddresse</label>
                <input type="text" id="address" name="address" placeholder="Geben Sie Ihre Lieferadresse ein" required>
    
                <label for="model">Wähle Gerät</label>
                <select id="model" name="model" required>
                    <option value="">--Wähle Gerät--</option>
                    <option value="orange-x1">Orange X1 - €699</option>
                    <option value="orange-pro">Orange Pro - €899</option>
                    <option value="orange-ultra">Orange Ultra - €1099</option>
                </select>
    
                <label for="quantity">Anzahl</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" required>
    
                <div class="summary" id="orderSummary">
                    <h2>Bestellübersicht</h2>
                    <p><strong>Modell:</strong> <span id="summaryModel">Nichts ausgewählt</span></p>
                    <p><strong>Menge:</strong> <span id="summaryQuantity">1</span></p>
                    <p><strong>Gesamtpreis:</strong> €<span id="summaryTotal">0.00</span></p>
                </div>
    
                <button type="submit">Bestellung absenden</button>
            </form>
        </div>
    	<?php include ('footer.php'); ?>
    </body>
</html>