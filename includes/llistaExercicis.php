<?php
$base_path = '/project/';
$llistaExercicis = [
    'formularis' => [
        ['href' => 'ex404/index.php', 'titol' => "<strong>Ex 404:</strong> Pujada de fitxers"],
        ['href' => 'ex405/index.php', 'titol' => "<strong>Ex 405:</strong> Pujada i modificació d'imatges"],
    ],
    'cookies_sessions' => [
        ['href' => 'ex406/index.php', 'titol' => "<strong>Ex 406:</strong> Contador de visites amb cookies"],
        ['href' => 'ex407/index.php', 'titol' => "<strong>Ex 407:</strong> Canvi de temes (fons) amb cookies"],
        ['href' => 'ex408/408fondoSesion1.php', 'titol' => "<strong>Ex 408:</strong> Canvi de temes (fons) amb sessions"],
        ['href' => 'ex409/409formulario1.php', 'titol' => "<strong>Ex 409:</strong> Formulari dividit en diverses pàgines amb sessions"],
    ],
    'autenticacio' => [
        ['href' => 'ex410-415/410index.php', 'titol' => "<strong>Ex 410 - 415:</strong> Sistema d'autenticació bàsic (Login i logout)"],
    ],
];

$exercicis = $llistaExercicis[$current_page] ?? [];
?>

<div class="bg-dark-green text-white rounded-4 p-4 shadow-sm mt-4 w-50 mx-auto">
    <h2 class="h4 fw-bold mb-3 text-center">Exercicis disponibles</h2>

    <?php if (empty($exercicis)): ?>
        <p class="text-center text-light">No hi ha exercicis disponibles per a aquesta secció.</p>
    <?php else: ?>
        <ul class="list-group list-group-flush">
            <?php foreach ($exercicis as $ex): ?>
                <li class="list-group-item bg-transparent text-white border-light">
                    <a href="<?php echo $base_path . $current_page . '/' . $ex['href']; ?>" 
                       class="text-decoration-none text-white">
                        <?php echo $ex['titol']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
