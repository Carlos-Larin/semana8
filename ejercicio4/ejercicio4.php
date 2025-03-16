<?php
function calcularFactorial($numero) {
    // Validar que la entrada sea un número entero no negativo
    if (!is_int($numero) || $numero < 0) {
        return "Entrada no válida. Por favor, ingrese un número entero no negativo.";
    }

    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Factorial</title>
</head>
<body>
    <h1>Ejercicio 4: Calcular Factorial</h1>
    <form method="post">
        <label for="numero">Ingrese un número entero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        echo "<p>El factorial de $numero es: " . calcularFactorial($numero) . "</p>";
    }
    ?>
</body>
</html>