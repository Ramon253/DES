<?php
require 'functions8.php';
$elements = getCommands($_POST["commands"]);
createMenu($elements[0]["name"],$elements[0]["fontColor"], $elements[0]["url"]);
printTable(getTable($_POST["gridTable"]));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="../css/ejercicio8.css">
</head>
<body>


</body>
</html>
