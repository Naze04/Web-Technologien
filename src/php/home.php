<?php require 'session_start.php'; ?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Orange Inc product Html</title>
        <meta charset="UTF-8">
	    <link rel="stylesheet" href="../css/style.css">
        <script src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>

        <div class="FlexImg">
            <section>
                <img class="img" src="../assets/Ophone_banner.jpg" alt="Ophone">
            </section>
            <section>
                <h1>Das OPhone</h1>
                <button onclick="location.href='oPhone.php'" class="orange" tabindex="2">Weitere Infos</button>
            </section>
        </div>

        <div class="FlexImg">
            <section>
                <img class="img" src="../assets/OWatch_banner.jpg" alt="OWatch">
            </section>
            <section>
                <h1>Die OWatch</h1>
                <button onclick="location.href='oWatch.php'" class="white" tabindex="2">Weitere Infos</button>
            </section>
        </div>

        <div class="FlexImg">
            <section>
                <img class="img" src="../assets/Earthpod_banner.jpg" alt="Earthpods">
            </section>
            <section>
                <h1>Die Earthpods</h1>
                <button onclick="location.href='earthPods.php'" class="orange" tabindex="2">Weitere Infos</button>
            </section>
        </div>

        <div id="slider-container">
            <div id="slider">
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
                <div class="card"><img src="../assets/silly_guy.jpg" alt="Bild von einer silly Katze"></div>
            </div>
            <button id="prev-btn">❮</button>
            <button id="next-btn">❯</button>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>