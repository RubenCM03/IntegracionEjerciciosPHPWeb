<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btnPujar'])) {
            
        if (isset($_FILES['fitxerEnviat']) && is_uploaded_file($_FILES['fitxerEnviat']['tmp_name'])) {
            $nom = basename($_FILES['fitxerEnviat']['name']);

            if (isset($_POST['amplada']) && is_numeric($_POST['amplada']) && $_POST['amplada'] > 0 &&
            isset($_POST['alçada']) && is_numeric($_POST['alçada']) && $_POST['alçada'] > 0) {

                $amplada = (int)$_POST['amplada'];
                $alçada = (int)$_POST['alçada'];
                $rutaDesti = "./uploads/" . $nom;

                if (!file_exists('./uploads')) {
                    mkdir('./uploads', 0777, true);
                }

                if (move_uploaded_file($_FILES['fitxerEnviat']['tmp_name'], $rutaDesti)) {
                    echo "<p>El Fitxer s'ha pujat correctament!!!</p>";
                    echo "<p><strong>Nom:</strong> $nom</p>";
                    echo "<p><strong>Dimensions indicades:</strong> {$amplada}px × {$alçada}px</p>";
                    echo "<p><strong>Ruta al servidor:</strong> $rutaDesti</p>";
                } else {
                    echo "<p>Error: No s'ha pogut moure el fitxer al directori <strong>Uploads</strong></p>";
                }

            } else {
                echo "<p>Error: Introdueix valors vàlids per a altura i amplada</p>";
            }

        } else {
            echo "<p>Error: No s’ha pujat cap fitxer vàlid.</p>";
        }
    }
?>