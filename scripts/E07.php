<!-- Crea y muestra un array con los números pares entre 1 y 100. -->
<?php 
$path = '../';
$titulo = 'Ejercicio 7';
include '../includes/header.php';
?>
<?php 
$array = []; // Array para almacenar los numeros
for ($i=1; $i <= 100; $i++) { 
    if ($i%2===0) {
        array_push($array, $i); // Añadir numero al final del array
    }
}
var_dump($array);
?>