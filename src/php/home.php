<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Inc product Html</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/home.css" type="text/css">
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <div class="FlexImg" style="position: relative;">
            <div style="position: absolute;">
                <a href="PLACEHOLDER.php">
                <img class="img" src="../assets/Ophone_banner.jpg" alt="Ophone">
                </a>
            </div>
            <div style="position: absolute; text-align: center;">
                <h1 style="color: black; padding: 20px;">Das OPhone</h1>
                <button onclick="location.href='shop.php'" class="orange" style="color: white;">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="orange clearOrange">Kaufen</button>
            </div>
        </div>

        <div class="FlexImg" style="position: relative;">
            <div style="position: absolute;">
                <a href="PLACEHOLDER.php">
                <img class="img" src="../assets/OWatch_banner.jpg" alt="OWatch">
                </a>
            </div>
            <div style="position: absolute; text-align: center;">
                <h1 style="color: white; padding: 20px">Die OWatch</h1>
                <button onclick="location.href='shop.php'" class="white">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="white clearWhite">Kaufen</button>
            </div>
        </div>

        <div class="FlexImg" style="position: relative;">
            <div style="position: absolute;">
                <a href="PLACEHOLDER.php">
                <img class="img" src="../assets/Earthpod_banner.jpg" alt="Earthpods">
                </a>
            </div>
            <div style="position: absolute; text-align: center;">
                <h1 style="color: black; padding: 20px">Die Earthpods</h1>
                <button onclick="location.href='shop.php'" class="orange" style="color: white;">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="orange clearOrange">Kaufen</button>
            </div>
        </div>


        <div id="slider-container">
            <div id="slider">
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
                <div class="card"><img src="../assets/silly_guy.jpg"></div>
            </div>
            <button id="prev-btn">❮</button>
            <button id="next-btn">❯</button>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>