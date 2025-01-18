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
        <h3 class="orangered">Neu</h3>
        <h1>OPhone 16 Pro kaufen</h1>
        <div class="row">
            <section class="mainsection-left">
                <img class="roundimg" src="../assets/OphonePro.jpg" alt="O-Phone">
            </section>
            <!--Product description-->
            <section class="mainsection-right">
                <h1 class="std-margin">Modell. <span class="gray">Welches ist das richtige Modell für dich?</span></h1>
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
                <div class="txtaligncenter">
                    <button class="orange">Kaufen</button>
                    <button class="orange clear black">Warenkorb</button>
                </div>
            </section>
        </div>
        
        <!--Information-->
        <div class="information">
            <h2>Technische Details</h2>
            <table class="informationtb">
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
