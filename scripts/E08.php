<!-- Crea un array de 5 números aleatorios entre 20 y 30, y muestralo. -->
<?php 
$path = '../';
$titulo = 'Ejercicio 8';
include '../includes/header.php';
?>
<?php 
$array = []; // Array para almacenar los numeros
for ($i=0; $i < 5; $i++) { 
    array_push($array, rand(20,30)); // generar numero y meterlo al final del array
}
var_dump($array);
?>