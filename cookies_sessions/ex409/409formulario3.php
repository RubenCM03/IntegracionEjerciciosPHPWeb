<?php
session_start();

// Recogemos los datos del segundo formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["convivents"] = $_POST["convivents"];
    $_SESSION["aficions"] = $_POST["aficions"] ?? [];
    $_SESSION["menu"] = $_POST["menu"] ?? [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EX 409 3</title>
</head>
<body>
<h2>Resultat</h2>

<table border="1" cellpadding="5">
    <tr><th>Camp</th><th>Valor</th></tr>
    <tr><td>Nom i cognoms</td><td><?= htmlspecialchars($_SESSION["nom"]) ?></td></tr>
    <tr><td>Email</td><td><?= htmlspecialchars($_SESSION["email"]) ?></td></tr>
    <tr><td>URL personal</td><td><a href="<?= htmlspecialchars($_SESSION["url"]) ?>" target="_blank"><?= htmlspecialchars($_SESSION["url"]) ?></a></td></tr>
    <tr><td>Gènere</td><td><?= htmlspecialchars($_SESSION["genere"]) ?></td></tr>
    <tr><td>Convivents</td><td><?= htmlspecialchars($_SESSION["convivents"]) ?></td></tr>
    <tr><td>Aficions</td><td><?= implode(", ", $_SESSION["aficions"]) ?></td></tr>
    <tr><td>Menu preferit</td><td><?= implode(", ", $_SESSION["menu"]) ?></td></tr>
</table>

</body>
</html>
