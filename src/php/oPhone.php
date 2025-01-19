<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Inc product Html</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <!--Product-->
        <h3 class="maincolor">Neu</h3>
        <h1>OPhone 16 Pro kaufen</h1>
        <div class="product">
            <left>
                <img class="roundimg" src="../assets/OphonePro.jpg" alt="O-Phone">
            </left>
            <!--Product description-->
            <right>
                <h1>Modell. <span class="textmainvariation">Welches ist das richtige Modell für dich?</span></h1>
                <!--Product selection-->
                <section>
                    <div>
                        <h3>OPhone 16 Pro</h3>
                        6,3" Display
                    </div>
                    <p>
                        Ab 1.199 €<br>
                        oder 49,96 €/Rate<br>
                        bei 24 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
                <section>
                    <div>
                        <h3>OPhone 16 Pro Max</h3>
                        6,9" Display
                    </div>
                    <p>
                        Ab 1.449 €<br>
                        oder 60,38 €/Rate<br>
                        bei 24 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
                <button class="orange">Kaufen</button>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="OPhone 16 Pro">
                    <input type="hidden" name="product_price" value="1449.00">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="action" value="add" class="orange clear black">Warenkorb</button>
                <form>
            </right>
        </div>
        
        <!--Information-->
        <div class="information">
            <h2>Technische Details</h2>
            <table>
                <tr>
                    <th>Feature</th>
                    <th>Beschreibung</th>
                </tr>
                <tr>
                    <td>Display</td>
                    <td>6.7 Zoll Super Retina XDR</td>
                </tr>
                <tr>
                    <td>Prozessor</td>
                    <td>A16 Bionic Chip</td>
                </tr>
                <tr>
                    <td>Kamera</td>
                    <td>Triple-Kamera-System mit 48 MP</td>
                </tr>
                <tr>
                    <td>Batterielaufzeit</td>
                    <td>Bis zu 28 Stunden</td>
                </tr>
            </table>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>
