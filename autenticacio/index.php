<?php
$page_title = "Exercicis autenticació";
$current_page = "autenticacio";
include __DIR__ . '/../includes/header.php';
?>

<main class="container">
    <h1 class="text-center fw-bold mb-3">- Autenticació -</h1>
    <div class="w-50 mx-auto">
        <p class="text-center fs-5 mb-4">
            En aquest apartat es treballa el procés d’<strong>autenticació d’usuaris</strong> i la gestió d’<strong>accés a contingut
            restringit</strong> mitjançant l’ús de sessions en <strong>PHP</strong>.
            L’objectiu és entendre com controlar l’accés a diferents pàgines i mantenir la informació de l’usuari durant tota la sessió.
        </p>
        <p class="text-center fs-6">
            Els exercicis inclouen la creació d’un formulari d’inici de sessió, un controlador que valida les credencials de l’usuari,
            i diferents vistes protegides (llistat de pel·lícules i sèries) que només es mostren si l’usuari ha iniciat sessió correctament.
        </p>
        <p class="text-center fs-6 mb-5">
            A més, es treballa la gestió de la sessió per emmagatzemar dades com els arrays de pel·lícules i sèries, així com un mecanisme
            per tancar sessió i tornar al formulari d’inici. D’aquesta manera, s’aprèn a separar la lògica del controlador de la capa de vista
            i a garantir la seguretat de l’aplicació web.
        </p>
    </div>
    <?php include __DIR__ . '/../includes/llistaExercicis.php'; ?>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>