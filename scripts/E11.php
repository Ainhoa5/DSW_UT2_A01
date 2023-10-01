<!-- Dado un array de números, un número es “líder” si su valor es mayor que la suma de
todos los números que se encuentran a su derecha. Escribir un programa que dado un
array de números, devuelva otro array conteniendo los números líderes.
Ejemplos:
• leaders ([1, 2, 3, 4, 0]) ==> return [4]
• leaders ([16, 17, 4, 3, 5, 2]) ==> return {17, 5, 2]
• leaders ([5, 2, -1]) ==> return [5, 2]
• leaders ([0, -1, -29, 3, 2]) ==> return [0, -1, 3, 2] -->
<?php 
$path = '../';
$titulo = 'Ejercicio 11';
include '../includes/header.php';
?>
<?php
function leaders($array) {
    $result = [];
    $right_sum = 0;
    
    // Iterar de derecha a izquierda
    for ($i = count($array) - 1; $i >= 0; $i--) {
        // Verificar si el número actual es un líder
        if ($array[$i] > $right_sum) {
            // Añadir el líder al principio del array de resultados
            array_unshift($result, $array[$i]);
        }
        
        // Actualizar la suma de los números a la derecha
        $right_sum += $array[$i];
    }
    
    return $result;
}

// Ejemplos
print_r(leaders([1, 2, 3, 4, 0]));  // Debería devolver [4]
echo "<br>";
print_r(leaders([16, 17, 4, 3, 5, 2]));  // Debería devolver [17, 5, 2]
echo "<br>";
print_r(leaders([5, 2, -1]));  // Debería devolver [5, 2]
echo "<br>";
print_r(leaders([0, -1, -29, 3, 2]));  // Debería devolver [0, -1, 3, 2]
echo "<br>";
?>
