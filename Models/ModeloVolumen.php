<?php
class ModelMasa
{
    public function convertirMasa($valor, $peso, $pesoA)
    {
        $unidades = [
            'milimetro cubico' => 0.000000001 ,
            'centimetro cubico' => 0.000001 ,
            'decimetro cubico' => 0.001 ,
            'metro cubico' => 1,
            'kilomentro cubico' => 1000000000,
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