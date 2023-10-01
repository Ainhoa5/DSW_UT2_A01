

<!-- ;  -->

<!-- ; ;  -->

<!-- ; .  -->

<?php
// Realizar un programa en el que se declare una variable de cada tipo de dato
$entero = 42;
$flotante = 42.42;
$booleano = true;
$arreglo = [1, 2, 3];
$objeto = new stdClass();
$recurso = fopen('php://stdout', 'w');
$nulo = null;
// Que se utilicen las comillas simples y dobles
$cadena1 = 'Hola, mundo';
$cadena2 = "Hola, mundo";

// que se concatenen varias cadenas
$concatenada = 'Hola, ' . 'mundo';

// que se concatenen varias cadenas con sus valores correspondientes
$concatenadaConValores = "El entero es $entero y el flotante es $flotante.";

// que se realice la salida de una de las cadenas mediante echo y mediante print
echo $cadena1 . "<br>";
print $cadena2 . "<br>";

// que se declare una constante (mediante define y const)
define('CONSTANTE_DEFINE', 'Soy una constante con define');
const CONSTANTE_CONST = 'Soy una constante con const';

// que se utilice var_dump()
var_dump($arreglo);

// donde se realice una conversión explícita de tipos
$enteroAFlotante = (float) $entero;

// donde haga uso de referencias
$referenciaAEntero = &$entero;
$referenciaAEntero = 100;  // Esto también cambia el valor de $entero

// Salida de constantes y referencia modificada
echo CONSTANTE_DEFINE . "<br>";
echo CONSTANTE_CONST . "<br>";
echo "Referencia y variable original: $referenciaAEntero y $entero<br>";
?>
