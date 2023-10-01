<?php

class VistaLongitud
{
    public function renderizar()
    {
        echo "<h1>Conversor de Masa</h1>";
        echo "<form method='post' action='index.php'>";
        echo "<input type='number' name='valor' placeholder='Valor' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='decimetro'>decimetro</option>";
        echo "<option value='metro'>metro</option>";
        echo "<option value='decametro'>decametro</option>";
        echo "<option value='hectometro'>hectometro</option>";
        echo "<option value='kilometro'>kilometro/option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='decimetro'>decimetro</option>";
        echo "<option value='metro'>metro</option>";
        echo "<option value='decametro'>decametro</option>";
        echo "<option value='hectometro'>hectometro</option>";
        echo "<option value='kilometro'>kilometro/option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $unidad, $unidadA)
    {
        if ($resultado !== null) {
            echo "<h2>Resultado</h2>";
            echo "<p>{$resultado} {$unidadA} ({$unidad})</p>";
        } else {
            echo "<p>Las unidades seleccionadas no son válidas.</p>";
        }
    }
}