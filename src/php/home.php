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

        <div class="FlexImg">
            <section>
                <a href="PLACEHOLDER.php">
                    <img class="img" src="../assets/Ophone_banner.jpg" alt="Ophone">
                </a>
            </section>
            <section>
                <h1>Das OPhone</h1>
                <button onclick="location.href='shop.php'" class="orange" style="color: white;">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="orange clearOrange">Kaufen</button>
            </section>
        </div>

        <div class="FlexImg">
            <section>
                <a href="PLACEHOLDER.php">
                <img class="img" src="../assets/OWatch_banner.jpg" alt="OWatch">
                </a>
            </section>
            <section>
                <h1>Die OWatch</h1>
                <button onclick="location.href='shop.php'" class="white">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="white clearWhite">Kaufen</button>
            </section>
        </div>

        <div class="FlexImg">
            <section>
                <a href="PLACEHOLDER.php">
                <img class="img" src="../assets/Earthpod_banner.jpg" alt="Earthpods">
                </a>
            </section>
            <section>
                <h1>Die Earthpods</h1>
                <button onclick="location.href='shop.php'" class="orange" style="color: white;">Weitere Infos</button>
                <button onclick="location.href='Ophone.php'" class="orange clearOrange">Kaufen</button>
            </section>
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