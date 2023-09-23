<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'metrosAPies'; // La acción predeterminada
}

require_once('Controllers/LongitudController.php');
$controller = new ConversionController();

if ($action === 'metrosAPies') {
    if (isset($_GET['metros'])) {
        $metros = $_GET['metros'];
        $controller->metrosAPies($metros);
    } else {
        // Mostrar un formulario para ingresar los metros
        include('views/conversion_form.php');
    }
}
?>