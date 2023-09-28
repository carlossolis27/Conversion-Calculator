<?php

class ControladorConversorMonedas
{
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function convertirMoneda($cantidad, $monedaOrigen, $monedaDestino)
    {
        $resultado = $this->modelo->convertirMoneda($cantidad, $monedaOrigen, $monedaDestino);
        $this->vista->mostrarResultado($resultado, $monedaOrigen, $monedaDestino);
    }
}
