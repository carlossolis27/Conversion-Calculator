<?php
class ModelDatos
{
    public function convertirDatos($valor, $unidad, $unidadA)
    {
        $unidades = [
            'byte' => 1,
            'kilobyte' => 1024,
            'megabyte' => 1048576,
            'terabute' => 1073741824,
            'petabyte' => 1099511627776,
        ];

        if (!isset($unidades[$unidad]) || !isset($unidades[$unidadA])) {
            throw new Exception('Unidades de tiempo no válidas');
        }

        $medidaDesde = $valor * $unidades[$unidad];
        $valorA = $medidaDesde / $unidades[$unidadA];

        return $valorA;
    }
}
?>