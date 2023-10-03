<?php
class ModelLongitud
{
    public function convertirLongitud($valor, $unidad, $unidadA)
    {
        $unidades = [
            'decimetro' => 0.1,
            'metro' => 1,
            'decametro' => 10,
            'hectometro' => 100,
            'kilometro' => 1000,
        ];

        if (!isset($unidades[$unidad]) || !isset($unidades[$unidadA])) {
            throw new Exception('Unidades de tiempo no válidas');
        }

        $distaciaDesde = $valor * $unidades[$unidad];
        $valorA = $distaciaDesde / $unidades[$unidadA];

        return $valorA;
    }
}
?>