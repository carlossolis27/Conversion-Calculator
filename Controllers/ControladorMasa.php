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

    public function convertirMasa($valor, $peso, $pesoA)
    {
        $resultado = $this->modelo->convertirASegundos($valor, $peso);

        if ($resultado !== null) {
            $resultado = $this->modelo->convertirASegundos($resultado, $pesoA);
            $this->vista->mostrarResultado($resultado, $peso, $pesoA);
        } else {
            $this->vista->mostrarResultado(null, $peso, $pesoA);
        }
    }
}
