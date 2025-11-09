<?php
$page_title = "EX 409 3";
$current_page = "ex_409_3";
include __DIR__ . '../../../includes/header.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["convivents"] = $_POST["convivents"];
    $_SESSION["aficions"] = $_POST["aficions"] ?? [];
    $_SESSION["menu"] = $_POST["menu"] ?? [];
}
?>

<main class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-sm p-4 w-25">
        <h2 class="text-center mb-4">Resultat</h2>

        <table class="table">
            <tr >
                <th class="bg-transparent text-white" scope="col">Camp</th>
                <th class="bg-transparent text-white" scope="col">Valor</th>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Nom i cognoms</td>
                <td class="bg-transparent text-white"><?= htmlspecialchars($_SESSION["nom"]) ?></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Email</td>
                <td class="bg-transparent text-white"><?= htmlspecialchars($_SESSION["email"]) ?></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">URL personal</td>
                <td class="bg-transparent text-white"><a href="<?= htmlspecialchars($_SESSION["url"]) ?>" target="_blank"><?= htmlspecialchars($_SESSION["url"]) ?></a></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Gènere</td>
                <td class="bg-transparent text-white"><?= htmlspecialchars($_SESSION["genere"]) ?></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Convivents</td>
                <td class="bg-transparent text-white"><?= htmlspecialchars($_SESSION["convivents"]) ?></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Aficions</td>
                <td class="bg-transparent text-white"><?= implode(", ", $_SESSION["aficions"]) ?></td>
            </tr>
            <tr>
                <td class="bg-transparent text-white">Menu preferit</td>
                <td class="bg-transparent text-white"><?= implode(", ", $_SESSION["menu"]) ?></td>
            </tr>
        </table>
    </div>
</main>



