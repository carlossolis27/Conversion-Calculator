<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $opcion = $_POST["opcion_conversion"];
    // Verifica si se seleccionó "Moneda"
    if ($opcion == "Moneda") {
        // Realiza la conversión de moneda
        require_once "../Controllers/CurrencyController.php";// Incluye el controlador de moneda
        require_once "../Models/CurrencyModel.php";
        require_once "../Views/CurrencyView.php"; 
        $modelo = new ModeloConversorMonedas();
        $vista = new VistaConversorMonedas();
        $vista->mostrarInterfaz();
    // Verifica si se seleccionó "Datos"
    }elseif ($opcion == "Datos") {
        // Realiza la conversión de datos
        require_once "../Controllers/DataController.php"; // Incluye el controlador de datos
        require_once "../Models/DataModel.php";
        require_once "../Views/DataView.php"; 
        $vista = new VistaDatos();
        $vista->renderizar();
        // Verifica si se seleccionó "Longitud"
    }elseif($opcion == "Longitud"){
         // Realiza la conversión de longitud
        require_once "../Controllers/LengthController.php"; // Incluye el controlador de longitud
        require_once "../Models/LengthModel.php";
        require_once "../Views/LengthView.php"; 
        $vista = new VistaLongitud();
        $vista->renderizar();
        // Verifica si se seleccionó "Masa"
    }elseif($opcion == "Masa"){
         // Realiza la conversión de masa
        require_once "../Controllers/MassController.php"; // Incluye el controlador de masa
        require_once "../Models/MassModel.php";
        require_once "../Views/MassView.php";
        $vista = new VistaMasa();
        $vista->renderizar();
        // Verifica si se seleccionó "Tiempo"
    }elseif($opcion == "Tiempo"){
        // Realiza la conversión de masa
        require_once "../Controllers/TimeController.php"; // Incluye el controlador de masa
        require_once "../Models/TimeModel.php";
        require_once "../Views/TimeView.php";
        $vista = new VistaTiempo();
        $vista->renderizar();
    }
}
?>