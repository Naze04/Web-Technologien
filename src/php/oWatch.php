<?php require 'session_start.php'; ?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <title>OPhone Produktseite</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="../css/style.css">
        <script src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <!--Product-->
        <h3 class="maincolor">Neu</h3>
        <h1>Die OWatch series 89 kaufen</h1>
        <div class="product">
            <div class="left">
                <img class="roundimg" src="../assets/OWatchBig.jpg" alt="OWatch">
            </div>
            <!--Product description-->
            <div class="right">
                <h1>Gehäuse. <span class="textmainvariation">Los geht's mit Material und Finish.</span></h1>
                <!--Product selection-->
                <section>
                    <div>
                        <h3>Aluminium</h3>
                        Mit GPS oder GPS + Cellular
                    </div>
                    <p>
                        Ab 449 €<br>
                        oder 19,19 €/Rate bei<br>
                        24 Raten mit 2,5 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
                <section>
                    <div>
                        <h3>Titan</h3>
                        Mit GPS + Cellular
                    </div>
                    <p>
                        Ab 799 €<br>
                        oder 34,15 €/Rate bei<br>
                        24 Raten mit 2,5 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
                <form action="cart.php" method="POST">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="OWatch">
                    <input type="hidden" name="product_price" value="799.00">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" name="action" value="add" class="orange clear black" tabindex="2">In den Warenkorb</button>
                </form>
            </div>
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
