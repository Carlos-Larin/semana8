<?php
echo "Ejercicio 4: Desarrolle una función en PHP que reciba un número entero y retorne su factorial. Asegúrese de validar la entrada y de utilizar una estructura de repetición (bucle) o una recursión para el cálculo.";
function calcularFactorial($numero) {
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