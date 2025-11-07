<?php
    $cookieName = 'accessos';

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reiniciar'])) {
        setcookie($cookieName, '', time() - 3600, $cookiePath);
        unset($_COOKIE[$cookieName]);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    $accessos = 0;
    if (isset($_COOKIE['accessos'])) {
        setcookie($cookieName, $accessos);
        $accessos = $_COOKIE['accessos'] + 1 ;
        $firstVisit = True;
    }
    setcookie('accessos', $accessos, time() + 3600 * 24 * 30); // Caduca en 30 dies
    echo "<p>Has visitat aquesta pàgina $accessos vegades.</p>";
?>