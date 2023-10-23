<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Matrices</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f39c12;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 2em;
            margin-bottom: 20px;
        }

        #resultado {
            margin-top: 20px;
            font-size: 1.5em;
            color: #e74c3c; 
        }

        .emocion-keyframe {
            font-size: 3em;
            animation: bounce 1s linear infinite;
        }

        @keyframes bounce {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>

<?php
$matriz1 = array(
    array(1, 0),
    array(0, 1)
);

$matriz2 = array(
    array(0, 1),
    array(1, 0)
);

function sumarMatrices($matriz1, $matriz2) {
    $resultado = array();
    for ($i = 0; $i < count($matriz1); $i++) {
        $fila = array();
        for ($j = 0; $j < count($matriz1[$i]); $j++) {
            $fila[] = $matriz1[$i][$j] + $matriz2[$i][$j];
        }
        $resultado[] = $fila;
    }
    return $resultado;
}

$resultado = sumarMatrices($matriz1, $matriz2);
?>

    <h1>Suma de Matrices</h1>

    <div id="resultado">
        <?php
        foreach ($resultado as $fila) {
            echo "[ ";
            foreach ($fila as $valor) {
                echo "$valor ";
            }
            echo "]<br>";
        }
        ?>
    </div>

    <br>
    <div class="emocion-keyframe">😊</div>

</body>
</html>
