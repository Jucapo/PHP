<!DOCTYPE html>
<html>

<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>

    <form action="" method="get">
        <label for="direction"></label>
        <input type="text" name="direccion" value="">
        <button type="submit" name="button">Enviar</button>
    </form>

</body>

</html>

<?php

if (isset($_GET['direccion'])) {

    $direccion = $_GET['direccion'];
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $direccion . "&key=AIzaSyD3tR9V7IyQVqGXC_RSxOfBviAQMxq0LjU";

    $json = file_get_contents($url);
    $datos = json_decode($json , true); 
}

?>