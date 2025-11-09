<?php
    $colors = ['White', 'Red', 'Blue', 'Green', 'Yellow', 'Pink', 'Gray', 'Orange', 'Purple', 'Brown'];
    if (isset($_POST['btnCanviarFons']) && isset($_POST['colors'])) {
        $selectedColor = $_POST['colors'];
        setcookie('bgcolor', $selectedColor, time() + 86400);
        $_COOKIE['bgcolor'] = $selectedColor;
    }
    if (isset($_COOKIE['bgcolor'])) {
        echo "<style>body { background-color: " . htmlspecialchars($_COOKIE['bgcolor']) . " !important; }</style>";
    }
?>

