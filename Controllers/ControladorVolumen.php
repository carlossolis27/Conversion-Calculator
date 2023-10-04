<?php

class ControladorVolumen
{
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function convertirVolumen($valor, $unidad, $unidadDestino)
    {
        $resultado = $this->modelo->convertiraVolumen($valor, $unidad);

        if ($resultado !== null) {
            $resultado = $this->modelo->convertiraVolumen($resultado, $unidadDestino);
            $this->vista->mostrarResultado($resultado, $unidad, $unidadDestino);
        } else {
            $this->vista->mostrarResultado(null, $unidad, $unidadDestino);
        }
    }
}
