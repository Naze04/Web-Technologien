<?php
require 'session_start.php';

// Funktion zum Hinzufügen eines Artikels zum Warenkorb
function addToCart($product_id, $product_name, $product_price, $quantity) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    foreach ($_SESSION['cart'] as &$item) {
        if ($item['product_id'] === $product_id) {
            $item['quantity'] += $quantity;
            return;
        }
    }

    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $quantity,
    ];
}

// Funktion zum Entfernen eines Artikels aus dem Warenkorb
function removeFromCart($product_id) {
    if (!isset($_SESSION['cart'])) return;

    $_SESSION['cart'] = array_filter($_SESSION['cart'], function($item) use ($product_id) {
        return $item['product_id'] !== $product_id;
    });
}

// Hinzufügen oder Entfernen von Artikeln
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'add') {
        $product_id = (int)$_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = (float)$_POST['product_price'];
        $quantity = (int)$_POST['quantity'];
        addToCart($product_id, $product_name, $product_price, $quantity);
    } elseif ($action === 'remove') {
        $product_id = (int)$_POST['product_id'];
        removeFromCart($product_id);
    }

    header('Location: cart.php');
    exit;
}
?>

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
                        <button type="submit" name="action" value="remove">Entfernen</button>
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
    <a href="shop.php">Weiter einkaufen</a>
    <a href="checkout.php">Zur Kasse</a>
    <?php include ('footer.php'); ?>
</body>
</html>
