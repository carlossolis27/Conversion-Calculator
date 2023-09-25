<?php
    require_once 'ModelMoneda.php';
    require_once 'VistaMonedas.php';
    
    class ControladorMonedas
    {
        public function convertirMoneda($cantidad, $moneda, $monedaCambio)
        {
            $modelo = new ModelMoneda();
            $resultado = $modelo->convertir($cantidad, $moneda, $monedaCambio);
    
            $vista = new VistaMonedas();
            $vista->mostrarResultado($resultado);
        }
    }
?>