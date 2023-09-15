<?php
require_once("config.php");
require_once("controladores/prestamoController.php");

$prestamoController = new PrestamoController();
$prestamoController->calcularCuota();
?>
