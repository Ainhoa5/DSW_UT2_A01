<!-- Realizar el programa “Hola Mundo” que contenga un enlace con el texto “Ir a la
siguiente página” que abrirá una segunda página que dirá “Esta es la segunda página”. -->
<?php 
$path = '../';
$titulo = 'Ejercicio 3';
include '../includes/header.php';
?>
<?php
echo 'Hola Mundo! ';
echo '<a href="../index.php">Ir a la siguiente página</a>';
?>
