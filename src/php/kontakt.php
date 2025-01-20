<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Kontaktformular</title>
        <meta charset="UTF-8">
    	<link rel="stylesheet" href="../css/style.css">
		<script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
        <!--Nav Bar-->
        <?php include ('nav.php'); ?>
        <div class="inhalt">
            <h2>Kontakt<span class="Uberschrifthalfte">formular</span></h2>
            <form action="home.php">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" value="" tabindex="2"><br><br>
                <label for="vname">Vorname</label><br>
                <input type="text" id="vname" name="vname" value="" tabindex="2"><br><br>
                <label for="email">E-Mail</label><br>
                <input type="text" id="email" name="email" value="" tabindex="2"><br><br>
                <label for="telefon">Telefon</label><br>
                <input type="text" id="telefon" name="telefon" value="" tabindex="2"><br><br>
                <label for="nachricht">Ihre Nachricht</label><br>
                <textarea rows="8" name="nachricht" required tabindex="2"></textarea><br><br>
                <input type="submit" value="Absenden" class="absenden" tabindex="2">
            </form> 
            <p>Nach Absenden des Kontaktformulars gelangen Sie auf wieder auf die Homepage.</p>
        </div>
		<?php include ('footer.php'); ?>
    </body>
</html>