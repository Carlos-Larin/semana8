<?php
function determinarSigno($numero) {
    if ($numero > 0) {
        return "El número $numero es positivo.";
    } elseif ($numero < 0) {
        return "El número $numero es negativo.";
    } else {
        return "El número es cero.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Determinar Signo</title>
</head>
<body>
    <h1>Ejercicio 5: Determinar Signo</h1>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Determinar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        echo "<p>" . determinarSigno($numero) . "</p>";
    }
    ?>
</body>
</html>