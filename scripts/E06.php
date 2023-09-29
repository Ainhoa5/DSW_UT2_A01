<!-- Realizar un programa que cada vez que se ejecute muestre tu nombre a un tamaño
elegido al azar entre 200% y 700%. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="font-size: <?php // generar el numero que se aplica a font-size con php
    $randomSize = rand(200, 700);
    echo $randomSize . "%";
    ?>">Ainhoa</p>
</body>

</html>