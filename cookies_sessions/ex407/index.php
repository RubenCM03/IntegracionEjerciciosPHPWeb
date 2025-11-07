<?php
    require 'php/407fondo.php'
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 407</title>
</head>
<body>
    <form method="post">
        <label for="colors">Selecciona un color de fons:</label>
        <select name="colors" id="colors">
            <?php
            foreach ($colors as $color) {
                $selected = (isset($_COOKIE['bgcolor']) && $_COOKIE['bgcolor'] === $color) ? 'selected' : '';
                echo "<option value=\"$color\" $selected>$color</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="btnCanviarFondo" value="Canviar fons" />
    </form>
</body>
</html>