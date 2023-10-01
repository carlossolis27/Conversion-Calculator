<?php

class ControladorMasa
{
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function convertirDatos($valor, $datos, $datosA)
    {
        $resultado = $this->modelo->convertirADatos($valor, $datos);

        if ($resultado !== null) {
            $resultado = $this->modelo->convertirADatos($resultado, $datosA);
            $this->vista->mostrarResultado($resultado, $datos, $datosA);
        } else {
            $this->vista->mostrarResultado(null, $datos, $datosA);
        }
    }
}
