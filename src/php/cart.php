<?php require 'session_start.php'; ?>

<!-- Warenkorb anzeigen -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Warenkorb</title>
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
    <!--Nav Bar-->
    <?php include ('nav.php'); ?>
    <h1>Ihr Warenkorb</h1>
    <?php if (!empty($_SESSION['cart'])): ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $item): ?>
                <li>
                    <?php echo htmlspecialchars($item['name']); ?> - 
                    Menge: <?php echo $item['quantity']; ?> - 
                    Preis: <?php echo number_format($item['price'], 2, ',', '.') . '€'; ?> - 
                    Gesamt: <?php echo number_format($item['price'] * $item['quantity'], 2, ',', '.') . '€'; ?>
                    <form action="cart.php" method="POST" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                        <button type="submit" name="action" value="remove" tabindex="2">Entfernen</button>
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
    <a href="shop.php" tabindex="2">Weiter einkaufen</a>
    <a href="checkout.php" tabindex="2">Zur Kasse</a>
    <?php include ('footer.php'); ?>
</body>
</html>
