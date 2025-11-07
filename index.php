<?php
$page_title = "Inici";
$current_page = "inici";
include 'includes/header.php';
?>

<main class="container">
    <section>
        <h1 class="text-center fw-bold mb-5">Rubén Cordero - Exercicis PHP</h1>
        <p class="text-center fs-5 w-50 mx-auto mb-4">
            En aquest projecte web podràs trobar tots els exercicis realitzats a classe de PHP organitzats
            per temàtiques. Cada exercici inclou una breu descripció i un enllaç per accedir-hi directament.
        </p>
        <img src="img/php.svg" alt="Logo del llenguatge de programació PHP" class="img-fluid d-block mx-auto my-4 w-50">
        <p class="text-center mx-auto mt-4 text-light small">
            Font dels exercicis: 
            <a href="https://aitor-medrano.github.io/dwes2122/04web.html#actividades" 
            target="_blank" 
            class="text-decoration-none text-info fw-semibold">
            Aitor Medrano – DWE
            </a>
        </p>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>