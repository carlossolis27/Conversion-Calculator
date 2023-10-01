<?php

class VistaTiempo
{
    public function renderizar()
    {
        echo "<h1>Conversor de Masa</h1>";
        echo "<form method='post' action='index.php'>";
        echo "<input type='number' name='valor' placeholder='Valor' required>";
        echo "<select name='unidad_origen'>";
        echo "<option value='gramos'>gramos</option>";
        echo "<option value='decagramo'>decagramo</option>";
        echo "<option value='hectogramo'>hectogramo</option>";
        echo "<option value='kilogramo'>kilogramo</option>";
        echo "<option value='Quintal Metrico'>Quintal Metrico</option>";
        echo "</select>";
        echo "<select name='unidad_destino'>";
        echo "<option value='gramos'>gramos</option>";
        echo "<option value='decagramo'>decagramo</option>";
        echo "<option value='hectogramo'>hectogramo</option>";
        echo "<option value='kilogramo'>kilogramo</option>";
        echo "<option value='Quintal Metrico'>Quintal Metrico</option>";
        echo "</select>";
        echo "<input type='submit' value='Convertir'>";
        echo "</form>";
    }

    public function mostrarResultado($resultado, $peso, $pesoA)
    {
        if ($resultado !== null) {
            echo "<h2>Resultado</h2>";
            echo "<p>{$resultado} {$pesoA} ({$peso})</p>";
        } else {
            echo "<p>Las unidades seleccionadas no son válidas.</p>";
        }
    }
}
