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

echo "Ejercicio 5: Escriba un script PHP que reciba un número y determine, mediante estructuras condicionales (if, else if, else), si el número es positivo, negativo o cero. Muestre el resultado en la página.";
?>