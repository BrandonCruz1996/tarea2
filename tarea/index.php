<?php
// Definir los dos números
$num1 = 10;
$num2 = 5;

// Suma
$suma = $num1 + $num2;
echo "\nLa suma de $num1 y $num2 es: $suma\n";

// Resta
$resta = $num1 - $num2;
echo " \nLa resta de $num1 y $num2 es: $resta\n";

// Multiplicación
$multiplicacion = $num1 * $num2;
echo "\nLa multiplicación de $num1 y $num2 es: $multiplicacion\n";

// División
if ($num2 != 0) {
    $division = $num1 / $num2;
    echo "\nLa división de $num1 entre $num2 es: $division\n";
} else {
    echo "No se puede dividir por cero\n";
}
?>