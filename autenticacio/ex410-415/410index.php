<?php
$page_title = "EX 410";
$current_page = "ex_410";
include __DIR__ . '../../../includes/header.php';
session_start();

$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<main class="d-flex align-items-center justify-content-center mt-5">
    <div class="card bg-dark-green text-white rounded-4 shadow-lg p-4 w-25">
        <h1 class="h3 text-center fw-bold mb-4">Login</h1>
        <form action='php/411login.php' method='post'>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger py-2 text-center">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for='usuari' class="form-label fw-semibold">Usuari:</label><br />
                <input type='text' class="form-control" name='inputUsuari' id='usuari' maxlength="50" /><br />
            </div>
            <div class="mb-3">
                <label for='password' class="form-label fw-semibold">Contrasenya:</label><br />
                <input type='password' class="form-control" name='inputPassword' id='password' maxlength="50" /><br />
            </div>
            <div class="d-flex justify-content-center">
                <input type="submit" name="enviar" class="btn btn-light fw-bold w-50" value="Enviar" />
            </div>
        </form>
    </div>
</main>
<?php include __DIR__ . '../../../includes/footer.php'; ?>


