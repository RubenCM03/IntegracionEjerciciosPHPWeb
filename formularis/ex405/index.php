<?php
require 'php/405subida.php'
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 405</title>
</head>
<body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="fitxer">Puja un fitxer:</label>
        <input id="fitxer" name="fitxerEnviat" type="file" required />
        <br><br>

        <label for="amplada">Amplada:</label>
        <input id="amplada" type="number" name="amplada" min="1" required />
        <br><br>

        <label for="alçada">Alçada:</label>
        <input id="alçada" type="number" name="alçada" min="1" required />
        <br><br>

        <input type="submit" name="btnPujar" value="Pujar" />
    </form>
    <div class="resultat">
        <?= $resultat ?>
    </div>
</body>
</html>