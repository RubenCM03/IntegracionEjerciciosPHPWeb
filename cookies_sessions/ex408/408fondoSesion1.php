<?php
    session_start();

    $colors = ['White', 'Red', 'Blue', 'Green', 'Yellow', 'Pink', 'Gray', 'Orange', 'Purple', 'Brown'];

    if (isset($_POST['btnCanviarFondo']) && isset($_POST['colors'])) {
        $_SESSION['bgcolor'] = $_POST['colors'];
    }

    if (isset($_SESSION['bgcolor'])) {
        $colorFons = htmlspecialchars($_SESSION['bgcolor']);
        echo "<style>body { background-color: $colorFons; }</style>";
    }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 408 1</title>
</head>
<body>
    <form method="post">
        <label for="colors">Selecciona un color de fons:</label>
        <select name="colors" id="colors">
            <?php
            foreach ($colors as $color) {
                $selected = (isset($_SESSION['bgcolor']) && $_SESSION['bgcolor'] === $color) ? 'selected' : '';
                echo "<option value=\"$color\" $selected>$color</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="btnCanviarFondo" value="Canviar fons" />
    </form>
    <br>
    <a href="408fondoSesion2.php">Anar a la pàgina 2</a>
</body>
</html>
