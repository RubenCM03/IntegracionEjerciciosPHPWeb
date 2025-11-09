<?php
$page_title = "EX 406";
$current_page = "ex_406";
include __DIR__ . '../../../includes/header.php';
include 'php/406contadorVisitas.php'
?>
<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-50">
        <form method="post">
            <div class="mb-3 text-center">
                <label for="reiniciar" class="form-label fs-4"><?php echo $mensaje; ?></label>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" name="reiniciar" class="btn btn-light fw-bold w-50" value="Reiniciar contador de visites">
            </div>
        </form>
    </div>
</main>