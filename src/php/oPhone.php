<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Inc product Html</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../css/product.css" type="text/css">
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <!--Product-->
        <h3 style="color: orangered;">Neu</h3>
        <h1>OPhone 16 Pro kaufen</h1>
        <div class="row">
            <section class="mainsection-left">
                <img class="round" src="../assets/OphonePro.jpg" alt="O-Phone">
            </section>
            <!--Product description-->
            <section class="mainsection-right">
                <h1 class="std-margin">Modell. <span style="color: gray">Welches ist das richtige Modell für dich?</span></h1>
                <!--Product selection-->
                <section class="b-round">
                    <div class="left">
                        <h3>OPhone 16 Pro</h3>
                        6,3" Display
                    </div>
                    <div class="right">
                        Ab 1.199 €<br>
                        oder 49,96 €/Rate<br>
                        bei 24 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </div>
                </section>
                <section class="b-round">
                    <div class="left">
                        <h3>OPhone 16 Pro Max</h3>
                        6,9" Display
                    </div>
                    <div class="right">
                        Ab 1.449 €<br>
                        oder 60,38 €/Rate<br>
                        bei 24 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </div>
                </section>
                <div class="mid">
                    <button class="orange">Kaufen</button>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="OPhone 16 Pro">
                        <input type="hidden" name="product_price" value="1449.00">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" name="action" value="add" class="orange clear black">Warenkorb</button>
                    <form>
                </div>
            </section>
        </div>
        <!--More-->
        <div class="row">
            <section class="b-round">

            </section>
            <section class="b-round">

            </section>
            <section class="b-round">

            </section>
        </div>
        
        <!--Information-->
        <div style="padding: 20px; text-align: center;">
            <h2>Technische Details</h2>
            <table style="margin: auto; border-collapse: collapse; width: 80%;">
                <tr>
                    <th style="border: 1px solid #ddd; padding: 8px;">Feature</th>
                    <th style="border: 1px solid #ddd; padding: 8px;">Beschreibung</th>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">Display</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">6.7 Zoll Super Retina XDR</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">Prozessor</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">A16 Bionic Chip</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">Kamera</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">Triple-Kamera-System mit 48 MP</td>
                </tr>
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">Batterielaufzeit</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">Bis zu 28 Stunden</td>
                </tr>
            </table>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>
