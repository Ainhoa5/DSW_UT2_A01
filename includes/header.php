<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a PHP </title>
    <link rel="stylesheet" href="<?= isset($path) ? $path : '' ?>css/style.css">
</head>

<body>


    <div class="contenido">
        <h1>Ejercicios de clase</h1>
        <p><?= isset($titulo) ? $titulo : '' ?></p>

        <div class="resultado">