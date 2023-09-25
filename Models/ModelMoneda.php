<?php

class ModelMoneda{
    private $tasasDeCambio = [
        'USD' => 1.0,
        'EUR' => 0.85,
        'GBP' => 0.73,
        'JPY' => 111.22,
        'CAD' => 1.26,
    ];

    public function convertir($cantidad, $moneda, $monedaCambio)
    {
        if (!isset($this->tasasDeCambio[$moneda]) || !isset($this->tasasDeCambio[$monedaCambio])) {
            throw new Exception('Monedas no soportadas');
        }

        $tasaDesde = $this->tasasDeCambio[$moneda];
        $tasaA = $this->tasasDeCambio[$monedaCambio];

        return $cantidad * ($tasaA / $tasaDesde);
    }
}

?>