<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: rgb(55, 177, 255);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    h1 {
        text-align: center;
        color: #fff;
        font-size: 2em;
        margin-bottom: 20px;
        animation: fadeInDown 1s ease-in-out;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
        animation: zoomIn 1s ease-in-out;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-size: 1.2em;
    }

    input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 15px;
        border: 1px solid #3498db;
        border-radius: 4px;
        font-size: 1em;
    }

    button {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1.2em;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    h2 {
        color: #fff;
        font-size: 1.5em;
        margin-top: 20px;
    }

    p {
        color: #333;
        font-size: 1.2em;
        margin-top: 25px;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }
</style>


</head>
<body>
    <h1>Calculadora de Gastos de Envío &nbsp&nbsp</h1>
    
    <form action="Ejercicio1.php" method="post">
        <label for="precio">Precio total de la cesta (en €):</label>
        <input type="number" name="precio" required>
        <button type="submit">Calcular Gastos de Envío </button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $precio = $_POST["precio"];

    if ($precio < 50) {
        $gastos_envio = 3.95;
    } elseif ($precio < 75) {
        $gastos_envio = 2.95;
    } elseif ($precio < 100) {
        $gastos_envio = 1.95;
    } else {
        $gastos_envio = 0; 
    }

    echo "<h2>&nbsp&nbspResultado:</h2>";
    echo "<p>&nbspEl precio total de la cesta es: $precio € &nbsp</p>";
    echo "<p>Los gastos de envío son: $gastos_envio €</p>";
} else {

    echo "<h2>&nbsp Error:</h2>";
    echo "<p>&nbsp Acceso no permitido.</p>";
}
?>
