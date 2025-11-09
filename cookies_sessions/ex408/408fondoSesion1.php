<?php
$page_title = "EX 408 1";
$current_page = "ex_408_1";
include __DIR__ . '../../../includes/header.php';
session_start();
$colors = ['White', 'Red', 'Blue', 'Green', 'Yellow', 'Pink', 'Gray', 'Orange', 'Purple', 'Brown'];
if (isset($_POST['btnCanviarFons']) && isset($_POST['colors'])) {
    $_SESSION['bgcolor'] = $_POST['colors'];
}
if (isset($_SESSION['bgcolor'])) {
    echo "<style>body { background-color: " . htmlspecialchars($_SESSION['bgcolor']) . " !important; }</style>";
}
?>
<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-50">
        <form method="post">
            <h3 class="text-center mb-3">Canvi de color del fons (Sessió)</h3>
            <div class="mb-3">
                <label for="colors" class="form-label fw-semibold">Selecciona un color de fons:</label>
                <select name="colors" id="colors" class="form-select">
                    <?php
                    foreach ($colors as $color) {
                        $selected = (isset($_SESSION['bgcolor']) && $_SESSION['bgcolor'] === $color) ? 'selected' : '';
                        echo "<option value=\"$color\" $selected>$color</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" name="btnCanviarFons" class="btn btn-light fw-bold w-50" value="Canviar fons" />
            </div>
        </form>
        <br>
        <div class="d-flex justify-content-center">
            <a href="408fondoSesion2.php" class="btn btn-outline-light fw-bold w-50">Anar a la pàgina 2</a>
        </div>
    </div>
</main>
