<?php
require 'session_start.php';

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <title>OPhone Shop</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/shop.css" type="text/css">
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>
    
        <div style="padding: 20px; text-align: center;">
            <h1>Willkommen im OPhone Shop</h1>
            <p>Wählen Sie aus einer Vielzahl innovativer Produkte!</p>
        </div>
    
        <div class="shop-grid">
            <!-- Produkt 1 -->
                <div class="shop-item">
                    <img src="../assets/OPhone16.jpg" alt="OPhone 16 Pro" class="shop-img">
                    <h2>OPhone 16 Pro</h2>
                    <p>Erleben Sie die Zukunft der Technologie.</p>
                    <button onclick="location.href='oPhone.php'" type="button" class="orange">Jetzt kaufen</button>
                </div>
            <!-- Produkt 2 -->
            <div class="shop-item">
                <img src="../assets/OWatch.jpg" alt="OWatch" class="shop-img">
                <h2>OWatch</h2>
                <p>Die perfekte Ergänzung für Ihren Alltag.</p>
                <button onclick="location.href='OWatch.php'" type="button" class="orange">Jetzt kaufen</button>
            </div>
        
            <!-- Produkt 3 -->
            <div class="shop-item">
                <img src="../assets/EarthPods.jpg" alt="O-Audio EarthPods" class="shop-img">
                <h2>O-Audio EarthPods</h2>
                <p>Kristallklarer Klang, kabellose Freiheit.</p>
                <button onclick="location.href='earthPods.php'" type="button" class="orange">Jetzt kaufen</button>
            </div>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>
