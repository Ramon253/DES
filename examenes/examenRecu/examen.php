<?php
require './functions.php';

$sonsCondition = cumpleHijos($_POST["children"]);
$housesCondition = cumpleDomicilio($_POST["houses"]);
$firstCondition = checkAgeIsMarried($_POST["age"], $_POST["state"]);
$secondCondition = checkSalary($_POST["salary"]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Jose Ramon Gallardo Azcarate</title>
    <link rel="stylesheet" href="examStyle.css">
</head>
<body>
<h1>Resultados de la solicitud</h1>
<table>
    <tr>
        <th>Mayor de 35 años y casado</th>
        <td class="<?= printCondition($firstCondition) ?>"></td>
    </tr>
    <tr>
        <th>Sueldo mayor de 10000 y menor de 30000</th>
        <td class="<?= printCondition($secondCondition)?>"></td>
    </tr>
    <tr>
        <th>
            Tener 2 hijos menores de 8 o uno con minusvalía
        </th>
        <td class="<?= printCondition($sonsCondition['condition']) ?>"></td>
    </tr>
    <tr>
        <th>No tener casas en provincias distintas o que todas sean vivienda habitual</th>
        <td class="<?= printCondition($housesCondition['condition1']) ?>"></td>
    </tr>
    <tr>
        <th>No tener más de dos casas</th>
        <td class="<?= printCondition($housesCondition['condition2']) ?>"></td>
    </tr>
</table>
</body>
</html>
