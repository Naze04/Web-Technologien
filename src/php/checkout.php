<?php
require 'session_start.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Orange Shop - Kasse</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
    <!--Nav Bar-->
    <?php include ('nav.php'); ?>
   
    <!-- Kassenformular -->
    <div class="container">
        <h1>Orange Shop - Checkout</h1>

        <form id="checkoutForm">
            <label for="customerName">Name</label>
            <input type="text" id="customerName" name="customerName" placeholder="Vor- und Nachname eingeben" required tabindex="2">

            <label for="email">E-Mail-Adresse</label>
            <input type="email" id="email" name="email" placeholder="E-Mail-Adresse eingeben" required tabindex="2">

            <label for="phone">Telefonnummer</label>
            <input type="tel" id="phone" name="phone" placeholder="Telefonnummer eingeben" required tabindex="2">

            <label for="address">Lieferadresse</label>
            <input type="text" id="address" name="address" placeholder="Adresse eingeben" required tabindex="2">

            <div class="order-summary" id="orderSummary">
                <h2>Bestellübersicht</h2>
                <?php if (!empty($_SESSION['cart'])): ?>
                <ul>
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <li>
                        
                            <?php echo htmlspecialchars($item['name']); ?> - 
                            Menge: <?php echo $item['quantity']; ?> - 
                            Preis: <?php echo number_format($item['price'], 2, ',', '.') . '€'; ?>
                            <form action="cart.php" method="POST" style="display:inline;">
                                <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p>
                    <strong>Gesamtsumme: 
                        <?php 
                        echo number_format(array_reduce($_SESSION['cart'], function($total, $item) {
                            return $total + $item['price'] * $item['quantity'];
                        }, 0), 2, ',', '.') . '€'; 
                        ?>
                    </strong>
                </p>
            <?php else: ?>
                <p>Ihr Warenkorb ist leer.</p>
            <?php endif; ?>

            <button onclick="location.href='cart.php'" tabindex="2">Zurück zum Warenkorb</button>
            <button type="submit" tabindex="2">Bestellung absenden</button>
            </div>
        </form>
    </div>
    <?php include ('footer.php'); ?>
</body>
</html>