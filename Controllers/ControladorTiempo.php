<?php

class ControladorTiempo
{
    private $modelo;
    private $vista;

    public function __construct($modelo, $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function convertirTiempo($valor, $unidadOrigen, $unidadDestino)
    {
        $resultado = $this->modelo->convertirASegundos($valor, $unidadOrigen);

        if ($resultado !== null) {
            $resultado = $this->modelo->convertirASegundos($resultado, $unidadDestino);
            $this->vista->mostrarResultado($resultado, $unidadOrigen, $unidadDestino);
        } else {
            $this->vista->mostrarResultado(null, $unidadOrigen, $unidadDestino);
        }
    }
}
