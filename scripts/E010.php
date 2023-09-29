<!-- Recibes una string de valores separados por coma. Debes eliminar del string los valores
duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
1,2,3,2,4,1,5
1,2,3,4,5 -->
<?php
// Cadena inicial
$cadenaInicial = "1,2,3,2,4,1,5";

// Convertir la cadena en un array
$array = explode(",", $cadenaInicial);

// Eliminar valores duplicados
$arrayUnico = array_unique($array);

// Convertir el array de nuevo a una cadena
$cadenaFinal = implode(",", $arrayUnico);

// Mostrar los valores
echo "Valor inicial: " . $cadenaInicial . PHP_EOL;
echo "Valor sin duplicados: " . $cadenaFinal . PHP_EOL;
?>
