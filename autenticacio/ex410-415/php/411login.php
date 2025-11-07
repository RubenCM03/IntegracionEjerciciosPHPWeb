<?php
session_start();

if (isset($_POST['enviar'])) {
    $usuari = trim($_POST['inputUsuari']);
    $password = trim($_POST['inputPassword']);

    if (empty($usuari) || empty($password)) {
        $_SESSION['error'] = "Has d'introduïr un usuari i una contrasenya!!!";
        header("Location: ../410index.php");
        exit;
    } else {
        if ($usuari === "admin" && $password === "admin") {
            $_SESSION['usuari'] = $usuari;
            unset($_SESSION['error']);
            $_SESSION['peliculas'] = [
                "El Señor de los Anillos",
                "El Padrino",
                "Gladiator"
            ];

            $_SESSION['series'] = [
                "Los Soprano",
                "Breaking Bad",
                "Stranger Things"
            ];
            header("Location: ../414series.php");
            exit;
        } else {
            $_SESSION['error'] = "Usuari o contrasenya incorrectes!!!";
            header("Location: ../410index.php");
            exit;
        }
    }
}
?>