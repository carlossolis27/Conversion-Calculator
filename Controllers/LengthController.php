<?php

class ControladorLongitud
{
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function convertirLongitud($valor, $unidad, $unidadA)
    {
        $resultado = $this->modelo->convertirAGramos($valor, $unidad);

        if ($resultado !== null) {
            $resultado = $this->modelo->convertirAGramos($resultado, $unidadA);
            $this->vista->mostrarResultado($resultado, $unidad, $unidadA);
        } else {
            $this->vista->mostrarResultado(null, $unidad, $unidadA);
        }
    }
}
?>