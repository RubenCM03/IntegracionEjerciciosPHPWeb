<?php
$page_title = "EX 409 2";
$current_page = "ex_409_2";
include __DIR__ . '../../../includes/header.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nom"] = $_POST["nom"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["url"] = $_POST["url"];
    $_SESSION["genere"] = $_POST["genere"];
}
?>

<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-25">
        <h2 class="text-center mb-4">Formulari 2</h2>
        <form action="409formulario3.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Numero de convivents:</label><br>
                <input type="number" name="convivents" min="0" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Aficions::</label><br>
                <input type="checkbox" name="aficions[]" value="Llegir"> Llegir<br>
                <input type="checkbox" name="aficions[]" value="Viatjar"> Viatjar<br>
                <input type="checkbox" name="aficions[]" value="Esports"> Esports<br>
                <input type="checkbox" name="aficions[]" value="Cine"> Cine<br><br>
            </div>
            
            <div class="mb-3">
                <label for="nom" class="form-label">Menú preferit (pots escollir més d'un):</label><br>
                <select name="menu[]" multiple required>
                    <option value="Pizza">Pizza</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Ensalada">Ensalada</option>
                    <option value="Hamburguesa">Hamburguesa</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" value="Envia" class="btn btn-light fw-bold w-50">
            </div>
        </form>
    </div>
</main>
