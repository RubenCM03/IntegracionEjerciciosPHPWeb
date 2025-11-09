<?php
$page_title = "EX 408 2";
$current_page = "ex_408_2";
include __DIR__ . '../../../includes/header.php';
session_start();
$colorFons = isset($_SESSION['bgcolor']) ? htmlspecialchars($_SESSION['bgcolor']) : 'sense color';
if (isset($_SESSION['bgcolor'])) {
    echo "<style>body { background-color: " . htmlspecialchars($_SESSION['bgcolor']) . " !important; }</style>";
}
if (isset($_GET['accio']) && $_GET['accio'] === 'netejar') {
    session_unset();
    session_destroy();
    header("Location: 408fondoSesion1.php");
    exit;
}
?>
<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-50">
        <p class="text-center">Color de fons actual: <strong><?= isset($colorFons) ? htmlspecialchars($colorFons) : 'No definit' ?></strong></p>

        <div class="text-center mt-3">
            <a href="408fondoSesion1.php" class="btn btn-light fw-bold mb-2 w-50">Tornar a la pàgina anterior</a><br>
            <a href="408fondoSesion2.php?accio=netejar" class="btn btn-outline-light fw-bold w-50">Netejar sessió i tornar</a>
        </div>
    </div>
</main>





