<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #ecf0f1;
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
        color: #c62828; 
        font-size: 2em;
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        width: 200px;
        margin-top: 20px;
    }

    td {
        border: 1px solid #c62828; 
        padding: 10px;
        text-align: center;
        font-size: 1.2em;
        color: #c62828;
    }

    td:nth-child(even) {
        background-color: #2196f3;
        color: #fff;
    }

    td:nth-child(odd) {
        background-color: #4caf50; 
        color: #fff; 
    }
    </style>

</head>
<body>
    <h1>Matriz con Bucle FOREACH</h1>

    <?php
    $matriz = array(
        array(3, 1),
        array(2, 0)
    );

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    foreach ($matriz as $fila) {
        echo "<tr>";
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
