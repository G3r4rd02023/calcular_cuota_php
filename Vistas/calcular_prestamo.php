<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Cuota Mensual</title>
</head>
<body>
    <h1>Calculadora de Cuota Mensual</h1>
    <form method="post">
        <label for="principal">Monto del préstamo (P):</label>
        <input type="number" id="principal" name="principal" required><br><br>

        <label for="tasaInteres">Tasa de interés anual (%):</label>
        <input type="number" id="tasaInteres" name="tasaInteres" required><br><br>

        <label for="plazo">Plazo del préstamo (meses):</label>
        <input type="number" id="plazo" name="plazo" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php if (isset($cuotaMensual)): ?>
    <div id="result">
        <h2>Resultado:</h2>
        <p>Monto de la cuota mensual: <?php echo number_format($cuotaMensual, 2); ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
