<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
<h1>
<?php
    $name = $_POST["userName"];
    $adress = $_POST["adress"];

    echo "$name's adress is $adress";
    /*echo $name
    h1 'adress is h1
    echo $adress*/
?>
</h1>
</body>
</html>
