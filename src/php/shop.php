<?php
require 'session_start.php';

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Shop</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>
    
        <div class="shopheader">
            <h1>Willkommen im Orange Shop</h1>
            <p>Entdecken Sie unsere vielfältige Auswahl an innovativen Produkten!</p>
        </div>
    
        <div class="shop-grid">
            <!-- Produkt 1 -->
            <div class="shop-item">
                <img src="../assets/OPhone16.jpg" alt="OPhone 16 Pro" class="shop-img">
                <h2>OPhone 16 Pro</h2>
                <p>Erleben Sie die Zukunft der Technologie.</p>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="OPhone 16 Pro">
                    <input type="hidden" name="product_price" value="1449.00">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="action" value="add" class="orange clear black" tabindex="2">Jetzt Kaufen</button>
                </form>
                <button onclick="location.href='Ophone.php'" type="button" class="orange" tabindex="2">Mehr Info</button>
            </div>
        
            <!-- Produkt 2 -->
            <div class="shop-item">
                <img src="../assets/OWatch.jpg" alt="OWatch" class="shop-img">
                <h2>OWatch</h2>
                <p>Die perfekte Ergänzung für Ihren Alltag.</p>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="Owatch">
                    <input type="hidden" name="product_price" value="799.00">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="action" value="add" class="orange clear black" tabindex="2">Jetzt Kaufen</button>
                </form>
                <button onclick="location.href='OWatch.php'" type="button" class="orange" tabindex="2">Mehr Info</button>
            </div>
        
            <!-- Produkt 3 -->
            <div class="shop-item">
                <img src="../assets/EarthPods.jpg" alt="O-Audio EarthPods" class="shop-img">
                <h2>O-Audio EarthPods</h2>
                <p>Kristallklarer Klang, kabellose Freiheit.</p>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="O-Audio EarthPods">
                    <input type="hidden" name="product_price" value="199.00">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="action" value="add" class="orange clear black" tabindex="2">Jetzt Kaufen</button>
                </form>
                <button onclick="location.href='EarthPods.php'" type="button" class="orange" tabindex="2">Mehr Info</button>
            </div>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>
