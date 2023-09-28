<?php
class ModelTiempo
{
    public function convertirTiempo($valor, $unidad, $unidadA)
    {
        $unidades = [
            'segundos' => 1,
            'minutos' => 60,
            'horas' => 3600,
            'dias' => 86400,
            'semanas' => 604800,
        ];

        if (!isset($unidades[$unidad]) || !isset($unidades[$unidadA])) {
            throw new Exception('Unidades de tiempo no válidas');
        }

        $segundosDesde = $valor * $unidades[$unidad];
        $valorA = $segundosDesde / $unidades[$unidadA];

        return $valorA;
    }
}
?>