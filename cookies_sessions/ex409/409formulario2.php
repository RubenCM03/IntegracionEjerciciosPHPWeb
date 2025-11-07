<?php
session_start();

// Guardamos los datos recibidos del primer formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["url"] = $_POST["url"];
    $_SESSION["genere"] = $_POST["genere"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EX 409 2</title>
</head>
<body>
<h2>Formulari 2</h2>
<form action="409formulario3.php" method="post">
    <label>Numero de convivents:</label><br>
    <input type="number" name="convivents" min="0" required><br><br>

    <label>Aficiones:</label><br>
    <input type="checkbox" name="aficions[]" value="Llegir"> Llegir<br>
    <input type="checkbox" name="aficions[]" value="Viatjar"> Viatjar<br>
    <input type="checkbox" name="aficions[]" value="Esports"> Esports<br>
    <input type="checkbox" name="aficions[]" value="Cine"> Cine<br><br>

    <label>Menú favorito (puedes elegir varios):</label><br>
    <select name="menu[]" multiple required>
        <option value="Pizza">Pizza</option>
        <option value="Pasta">Pasta</option>
        <option value="Ensalada">Ensalada</option>
        <option value="Hamburguesa">Hamburguesa</option>
    </select><br><br>

    <input type="submit" value="Envia">
</form>
</body>
</html>
