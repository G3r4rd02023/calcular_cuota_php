<?php
class PrestamoModel {
    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function calcularCuotaMensual($principal, $tasaInteres, $plazo) {
        $sql = "CALL calcular_cuota_mensual(?, ?, ?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("ddd", $principal, $tasaInteres, $plazo);
        $stmt->execute();
        $stmt->bind_result($cuotaMensual);
        $stmt->fetch();
        $stmt->close();

        return $cuotaMensual;
    }
}
?>
