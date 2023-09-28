<?php

require_once 'Models/ModeloConversorMonedas.php';
require_once 'Views/VistaConversorMonedas.php';
require_once 'Controllers/ControladorConversorMonedas.php';

$modelo = new ModeloConversorMonedas();
$vista = new VistaConversorMonedas();
$controlador = new ControladorConversorMonedas($modelo, $vista);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidad = $_POST['cantidad'];
    $monedaOrigen = $_POST['moneda_origen'];
    $monedaDestino = $_POST['moneda_destino'];

    $controlador->convertirMoneda($cantidad, $monedaOrigen, $monedaDestino);
}

$vista->mostrarInterfaz();


?>