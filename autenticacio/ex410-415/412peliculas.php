<?php
$page_title = "EX 412";
$current_page = "ex_412";
include __DIR__ . '../../../includes/header.php';
session_start();

if (!isset($_SESSION['usuari'])) {
    die("Error - has <a href='410index.php'>d'identificar-te</a>.<br>");
}
$peliculas = $_SESSION['peliculas'] ?? [];
?>
<main>
    <nav class="nav nav-pills nav-justified mb-4 gap-2 justify-content-center">
        <a class="text-white fw-semibold fs-5" href="412peliculas.php">Pelicules</a>
        <a class="text-white fw-semibold fs-5" href="414series.php">Series</a>
        <a class="text-white fw-semibold fs-5" href="php/413logout.php">Tancar la sessió</a>
    </nav>
    <div class="container my-4">
        <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 mx-auto w-25 ">
            <h1 class="h3 text-center fw-bold mb-3">Llistat de Pel·lícules</h1>
            <ul class="list-group list-group-flush text-center">
                <?php foreach ($peliculas as $peli): ?>
                    <li class="list-group-item bg-transparent text-white border-light"><?= htmlspecialchars($peli) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    <ul>
    </ul>
</main>
<?php include __DIR__ . '../../../includes/footer.php'; ?>
