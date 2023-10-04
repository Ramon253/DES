<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

/*Esto es una validacion que si se quitara seguiria funcionando el codigo*/
if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Introduce un numero (Los decimales van con punto no con coma)";
    return;
}
?>

<h1>Numero 1 entero :
    <?php
    echo intval($num1);
    ?>
</h1>
<h1>Numero 2 redondeado :
    <?php
    echo round($num2);
    ?>
</h1>

</body>
</html>


