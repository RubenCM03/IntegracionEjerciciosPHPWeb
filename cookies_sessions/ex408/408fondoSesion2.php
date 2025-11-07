<?php
    session_start();

    $colorFons = isset($_SESSION['bgcolor']) ? htmlspecialchars($_SESSION['bgcolor']) : 'sense color';
    if (isset($_SESSION['bgcolor'])) {
        echo "<style>body { background-color: $colorFons; }</style>";
    }

    // Si l’usuari vol buidar la sessió
    if (isset($_GET['accio']) && $_GET['accio'] === 'netejar') {
        session_unset();
        session_destroy();
        header("Location: 408fondoSesion1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 408 2</title>
</head>
<body>
    <p>Color de fons actual: <strong><?= $colorFons ?></strong></p>

    <a href="408fondoSesion1.php">Tornar a la pàgina anterior</a><br><br>
    <a href="408fondoSesion2.php?accio=netejar">Netejar sessió i tornar</a>
</body>
</html>
