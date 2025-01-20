<?php
// session_start.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Warenkorb Funktionen
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
