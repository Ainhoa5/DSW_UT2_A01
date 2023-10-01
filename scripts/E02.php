<!-- Realizar el programa “Hola Mundo” pero añadiendo algo de estilo en PHP. -->
<?php
// Inicializa la variable del color de fondo
$colorDeFondo = '#FFFFFF'; // Blanco por defecto

// Comprueba si se ha seleccionado un color
if (isset($_GET['color'])) {
    $colorDeFondo = $_GET['color'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo con estilo dinámico</title>
</head>
<body style="background-color: <?php echo $colorDeFondo; ?>;">
    <h1>Hola Mundo</h1>

    <form action="E02.php" method="get">
        <label for="color">Elija un color de fondo:</label>
        <select name="color" id="color">
            <option value="#FFFFFF">Blanco</option>
            <option value="#FF0000">Rojo</option>
            <option value="#00FF00">Verde</option>
            <option value="#0000FF">Azul</option>
        </select>
        <input type="submit" value="Aplicar">
    </form>
</body>
</html>
