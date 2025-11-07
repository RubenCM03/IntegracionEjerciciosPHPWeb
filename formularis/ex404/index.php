<?php
$page_title = "EX 404";
$current_page = "ex_404";
include __DIR__ . '../../../includes/header.php';
include 'php/404subida.php'
?>
<main class="d-flex align-items-center justify-content-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-25">
        <h1 class="h3 text-center fw-bold mb-4">Pujar Fitxer</h1>
        <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="fitxer" class="form-label fw-semibold">Puja un fitxer:</label>
                <input id="fitxer" name="fitxerEnviat" type="file" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="amplada" class="form-label fw-semibold">Amplada:</label>
                <input id="amplada" type="number" name="amplada" min="1" class="form-control" required />
            </div>
    
            <div class="mb-3">
                <label for="alçada" class="form-label fw-semibold">Alçada:</label>
                <input id="alçada" type="number" name="alçada" min="1" class="form-control" required />
            </div>
    
            <div class="d-flex justify-content-center">
                <input type="submit" name="btnPujar" class="btn btn-light fw-bold w-50" value="Pujar" />
            </div>
        </form>
    </div>
</main>