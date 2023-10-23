<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #FFD700, #FF6347);
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    h1 {
        text-align: center;
        color: #fff;
        margin-bottom: 20px;
    }

    form {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    input {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #8A2BE2;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #6A5ACD;
    }

    h2 {
        color: #fff;
        margin-top: 20px;
    }

    p {
        color: #333;
        margin-top: 10px;
    }
    </style>


</head>
<body>
    <h1>Calculadora del Mayor de 5 Números</h1>
    
    <form action="Ejercicio3.php" method="post">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2: </label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3: </label>
        <input type="number" name="num3" required><br>

        <label for="num4">Número 4: </label>
        <input type="number" name="num4" required><br>

        <label for="num5">Número 5: </label>
        <input type="number" name="num5" required><br>

        <button type="submit">Calcular Mayor</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $num4 = $_POST["num4"];
    $num5 = $_POST["num5"];

    $mayor = $num1;

    for ($i = 2; $i <= 5; $i++) {
        $num = $_POST["num$i"];
        if ($num > $mayor) {
            $mayor = $num;
        }
    }

    echo "<h2>Resultado:</h2>";
    echo "<p>El mayor de los números es: $mayor</p>";
} else {

    echo "<h2>Error:</h2>";
    echo "<p>Acceso no permitido.</p>";
}
?>
</body>
</html>
