<?php
$page_title = "EX 407";
$current_page = "ex_407";
include __DIR__ . '../../../includes/header.php';
include 'php/407fondo.php'
?>

<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-50">
        <form method="post">
            <h3 class="text-center mb-3">Canvi de color del fons (Cookies)</h3>
            <div class="mb-3">
                <label for="colors" class="form-label fw-semibold">Selecciona un color de fons:</label>
                <select name="colors" id="colors" class="form-select">
                    <?php
                    foreach ($colors as $color) {
                        $selected = (isset($_COOKIE['bgcolor']) && $_COOKIE['bgcolor'] === $color) ? 'selected' : '';
                        echo "<option value=\"$color\" $selected>$color</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" name="btnCanviarFons" class="btn btn-light fw-bold w-50" value="Canviar fons" />
            </div>
        </form>
    </div>
</main>