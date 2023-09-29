<!-- Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de
un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la
captura de seis imágenes de un dado para hacerlo más visual. -->

<!DOCTYPE html>
<html>
<head>
  <title>Random Image</title>
</head>
<body>

  <img src="<?php 
                $path = '../img/dice/'; // ruta a la carpeta con las fotos
                $array = ['Dice-1.png', 'Dice-2.png', 'Dice-3.png', 'Dice-4.png', 'Dice-5.png', 'Dice-6.png']; // array con las fotos del dado
                $randomIndex = rand(0, count($array) - 1); // generar un indice random
                echo $path.$array[$randomIndex]; // recoger la posicion del array con el index
             ?>">

</body>
</html>
