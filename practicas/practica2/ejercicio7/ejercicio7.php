<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="../css/ejercicio7.css">
</head>
<body>
<?php
    $salary = $_POST["salary"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $selected = 'class = "selected"'
?>
<div class="container">
    <table>
        <tr>
            <th colspan="2">Nombre</th>
            <td colspan="2" class="selected"><?= $_POST["name"] ?></td>
        </tr>
        <tr>
            <td <?php if ($sex == 'M') echo $selected; ?> colspan="2">HOMBRE</td>
            <td <?php if ($sex == 'F') echo $selected; ?> colspan="2">MUJER</td>
        </tr>
        <tr>
            <td <?php if ($salary <= 12000) echo $selected; ?> >0-1200</td>
            <td <?php if ($salary <= 20000 && $salary > 12000) echo $selected; ?> >12000-20000</td>
            <td <?php if ($salary <= 35000 && $salary > 20000 ) echo $selected; ?> >21000-35000</td>
            <td <?php if ($salary > 35000) echo $selected; ?>>+35000</td>
        </tr>
        <tr>
            <td <?php if ($age <= 25) echo $selected; ?> >0-25</td>
            <td <?php if ($age <= 45 && $age > 25) echo $selected; ?> >25-45</td>
            <td <?php if ($age <= 65 && $age > 45) echo $selected; ?> >45-65</td>
            <td <?php if ($age > 65) echo $selected; ?>>JUBILADO</td>
        </tr>
    </table>
</div>
</body>
</html>
<?php
