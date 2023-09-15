<?php
require_once("../modelos/prestamoModel.php");

class PrestamoController {
    private $model;

    public function __construct() {
        global $mysqli;
        $this->model = new PrestamoModel($mysqli);
    }

    public function calcularCuota() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $principal = $_POST["principal"];
            $tasaInteres = $_POST["tasaInteres"];
            $plazo = $_POST["plazo"];
            
            $cuotaMensual = $this->model->calcularCuotaMensual($principal, $tasaInteres, $plazo);
            
            include("../vistas/calcular_prestamo.php");
        }
    }
}
?>
