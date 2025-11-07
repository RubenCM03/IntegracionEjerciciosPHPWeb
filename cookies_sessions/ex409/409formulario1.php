<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EX 409 1</title>
</head>
<body>
<h2>Formulario 1</h2>
<form action="409formulario2.php" method="post">
    <label>Nom i cognoms:</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>URL de la pàgina personal:</label><br>
    <input type="url" name="url"><br><br>

    <label>Gènere:</label><br>
    <input type="radio" name="genere" value="Masculí" required> Masculí
    <input type="radio" name="genere" value="Femení"> Femení
    <input type="radio" name="genere" value="Altre"> Altre<br><br>

    <input type="submit" value="Continua">
</form>
</body>
</html>

</body>
</html>