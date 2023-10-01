<!-- El saltamonte.
Desarrollar un programa que recibe una cadena de valores enteros separados por coma
que representa los “saltos". El mismo deberá mostrar el número en la posición actual y
a continuación saltar tantas posiciones como el número indicado, mostrando en esas
posiciones _ (underscore) y volviendo a empezar. En el caso de mostrar un 0, se finaliza.
Por ejemplo, saltos=2,3,4,1,5,3,6,7,8,1,10,0,20 se mostraría:
2,_,_,1,_,3,_,_,_,1,_,0, -->
<?php 
$path = '../';
$titulo = 'Ejercicio 12';
include '../includes/header.php';
?>
<?php
$saltos = "2,3,4,1,5,3,6,7,8,1,10,0,20";
$array = explode(",", $saltos);

$output = []; // Array para almacenar el resultado

for ($i = 0; $i < count($array);) {
    $numeroActual = intval($array[$i]);
    array_push($output, $numeroActual); // Añadir el número actual al resultado
    
    if ($numeroActual === 0) {
        break; // Salir del bucle si el número es 0
    }
    
    $i += $numeroActual + 1; // Saltar las posiciones indicadas
    
    // Insertar los _ (underscore)
    for ($j = 1; $j <= $numeroActual && $i - $j >= 0; $j++) {
        $output[$i - $j] = '_';
    }
}

// Convertir el array de salida a una cadena y mostrarla
echo implode(",", $output);
?>
