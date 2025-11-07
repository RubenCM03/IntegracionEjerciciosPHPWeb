<?php
$page_title = "Exercicis Cookies i Sessions";
$current_page = "cookies_sessions";
include __DIR__ . '/../includes/header.php';
?>

<main class="container">
    <h1 class="text-center fw-bold mb-3">- Cookies i Sessions -</h1>
    <div class="w-50 mx-auto">
        <p class="text-center fs-5 mb-4">
            En aquest apartat trobaràs diversos exercicis pràctics dedicats a l’ús de <strong>cookies</strong> i <strong>sessions</strong> amb <strong>PHP</strong>.
            L’objectiu és entendre com emmagatzemar i mantenir informació entre diferents visites o pàgines d’un lloc web.
        </p>
        <p class="text-center fs-6">
            S'utilitzen cookies per desar preferències de l’usuari, com ara el color de fons de la pàgina
            o el nombre de vegades que ha visitat el lloc. També com emprar sessions per mantenir dades temporals mentre l’usuari navega.
        </p>
        <p class="text-center fs-6 mb-5">
            Aquests exercicis inclouen: un comptador de visites amb cookies, la personalització de l’aparença de la pàgina segons l’usuari,
            la gestió de sessions per compartir dades entre pàgines, i un formulari dividit en diversos passos que desa la informació en la sessió.
        </p>
    </div>
    <?php include __DIR__ . '/../includes/llistaExercicis.php'; ?>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>