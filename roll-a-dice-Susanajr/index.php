<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tirada de Dados</title>
</head>
<body>
    <h1>Tirada de Dados</h1>
    <form method="post" action="roll.php">
        <label for="tiradas">Introduce el número de tiradas:</label>
        <input type="number" id="tiradas" name="tiradas" min="1" required>
        <button type="submit">Lanzar</button>
    </form>
</body>
</html>

