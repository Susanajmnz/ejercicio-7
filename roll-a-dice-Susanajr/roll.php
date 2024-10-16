<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de las Tiradas</title>
</head>
<body>
    <h1>Resultado de las Tiradas</h1>
    <?php
    // Verifica si el método de la solicitud es POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Convierte el valor de 'tiradas' en un entero
        $tiradas = intval($_POST['tiradas']);
        // Inicializa un array con las posibles caras del dado
        $resultados = array_fill(1, 6, 0);

        // Repite el proceso por el número de tiradas
        for ($i = 0; $i < $tiradas; $i++) {
            // Genera un número aleatorio entre 1 y 6
            $numero = rand(1, 6);
            // Incrementa el contador para el número generado
            $resultados[$numero]++;
        }

        // Crea una tabla para mostrar los resultados
        echo "<table>";
        echo "<tr><th>Número</th><th>Veces Obtenidas</th></tr>";
        // Recorre los resultados y muestra cada uno en una fila de la tabla
        foreach ($resultados as $numero => $veces) {
            echo "<tr><td>$numero</td><td>$veces</td></tr>";
        }
        echo "</table>";
    } else {
        // Muestra un mensaje si no se han realizado tiradas
        echo "<p>No se han realizado tiradas.</p>";
    }
    ?>
    <a href="index.php">Volver</a>
</body>
</html>
