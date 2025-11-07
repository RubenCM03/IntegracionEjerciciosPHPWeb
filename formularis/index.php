<?php
$page_title = "Exercicis Formularis";
$current_page = "formularis";
include __DIR__ . '/../includes/header.php';
?>

<main class="container">
    <h1 class="text-center fw-bold mb-3">- Formularis -</h1>
    <div class="w-50 mx-auto">
        <p class="text-center fs-5 mb-4">
            En aquest apartat trobaràs diversos exercicis pràctics dedicats a la creació, validació i
            tractament de formularis web amb <strong>PHP</strong>. L’objectiu és aprendre a rebre dades de l’usuari,
            validar-les i processar-les de manera segura, millorant així la interacció amb les aplicacions web.
        </p>
        <p class="text-center fs-6">
            Els exercicis d'aquest temari utilitzen mètodes com <strong>GET</strong> i <strong>POST</strong> per enviar dades,
            així com tècniques de validació tant al client com al servidor per assegurar la integritat i seguretat de la informació.
        </p>
        <p class="text-center fs-6 mb-5">
            Concretament, els exercicis realitzats estàn centrats a la pujada, validació i gestió de fitxers a través de formularis web.
        </p>
    </div>
    <?php include __DIR__ . '/../includes/llistaExercicis.php'; ?>
</main>
<?php include __DIR__ . '/../includes/footer.php'; ?>