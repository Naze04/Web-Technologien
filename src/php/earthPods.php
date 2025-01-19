<!DOCTYPE html>
<html lang="de">
    <head>
        <title>OPhone Produktseite</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <!--Product-->
        <h3 class="maincolor">Kostenlose Gravur</h3>
        <h1>EarthPods 4 kaufen</h1>
        <div class="product">
            <left>
                <img src="../assets/EarthPodsBig.jpg" alt="EarthPods">
            </left>
            <!--Product description-->
            <right>
                <h1>Wähle dein Modell</h1>
                <!--Product selection-->
                <section>
                    <div>
                        <h3>EarthPods 4</h3>
                    </div>
                    <p>
                        Ab 149,00 €<br>
                        oder 49,67 €/Rate<br>
                        bei 3 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
                <section>
                    <h3>AirPods 4 mit Aktiver Geräuschunter-<br>drückung</h3>
                    <p>
                        Ab 199,00 €<br>
                        oder 66,33 €/Rate<br>
                        bei 3 Raten mit 0 %<br>
                        eff. Zins p.a.****
                    </p>
                </section>
<<<<<<< HEAD
                <div class="mid">
                    <button class="orange">Kaufen</button>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="O-Audio EarthPods">
                        <input type="hidden" name="product_price" value="199.00">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" name="action" value="add" class="orange clear black">Warenkorb</button>
                    </form>
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
=======
                <button class="orange">Kaufen</button>
                <button class="orange clear black">Warenkorb</button>
            </right>
>>>>>>> Kai-Branch
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
