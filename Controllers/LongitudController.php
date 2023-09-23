<?php
include '../Models/LongitudModel.php';
class ConversionController {
    public function metrosAPies($metros) {
        $conversor = new Conversor();
        $pies = $conversor->convertirMetrosAPies($metros);
        include('../views/conversion.php');
    }
}
?>