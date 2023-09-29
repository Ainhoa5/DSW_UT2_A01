<!-- Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando
por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada. -->
<?php
// Declarar el array con los valores especificados
$array = [1, 2, 'antonio', 200, 'pepe'];

// Invertir el array para empezar por el último elemento
$arrayInvertido = array_reverse($array);

// Recorrer el array invertido y mostrar cada elemento
foreach ($arrayInvertido as $elemento) {
    echo $elemento . PHP_EOL;
}
?>
