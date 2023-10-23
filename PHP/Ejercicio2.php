<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Calculadora de Gastos de Envío</h1>
    
    <form action="calcular_envio_switch.php" method="post">
        <label for="precio">Precio total de la cesta (en €): </label>
        <input type="number" name="precio" required>
        <button type="submit">Calcular Gastos de Envío</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $precio = $_POST["precio"];

    switch (true) {
        case ($precio < 50):
            $gastos_envio = 3.95;
            break;
        case ($precio < 75):
            $gastos_envio = 2.95;
            break;
        case ($precio < 100):
            $gastos_envio = 1.95;
            break;
        default:
            $gastos_envio = 0;
    }

    echo "<h2>Resultado:</h2>";
    echo "<p>El precio total de la cesta es: $precio €</p>";
    echo "<p>Los gastos de envío son: $gastos_envio €</p>";
} else {

    echo "<h2>Error:</h2>";
    echo "<p>Acceso no permitido.</p>";
}
?>