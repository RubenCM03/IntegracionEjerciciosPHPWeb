<?php
$page_title = "EX 409 1";
$current_page = "ex_409_1";
include __DIR__ . '../../../includes/header.php';
session_start();
?>

<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-25">
        <h2 class="text-center mb-4">Formulario 1</h2>
        <form action="409formulario2.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom i cognoms:</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">URL de la pàgina personal:</label>
                <input type="url" id="url" name="url" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Gènere:</label><br>
                <input type="radio" id="masculi" name="genere" value="Masculí" required>
                <label for="masculi" class="me-3">Masculí</label>

                <input type="radio" id="femeni" name="genere" value="Femení">
                <label for="femeni" class="me-3">Femení</label>

                <input type="radio" id="altre" name="genere" value="Altre">
                <label for="altre">Altre</label>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Continua" class="btn btn-light fw-bold w-50">
            </div>
        </form>
    </div>
</main>

