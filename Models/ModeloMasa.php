<?php
class ModelMasa
{
    public function convertirMasa($valor, $peso, $pesoA)
    {
        $unidades = [
            'gramos' => 1,
            'decagramo' => 10,
            'hectogramo' => 100,
            'kilogramo' => 1000,
            'Quintal Metrico' => 10000,
        ];

        if (!isset($unidades[$peso]) || !isset($unidades[$pesoA])) {
            throw new Exception('Unidades de Masa no válidas');
        }

        $MasaDesde = $valor * $unidades[$peso];
        $valorA = $MasaDesde / $unidades[$pesoA];

        return $valorA;
    }
}
?>