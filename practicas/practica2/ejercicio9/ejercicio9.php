<?php
$header = $_POST["header"];
$body = $_POST["body"];
$footer = $_POST["footer"];
$css = $_POST["css"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="./css/style<?= $css ?>.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Asap", sans-serif;
        }
        .banner img{
            width: 100%;
        }
    </style>
</head>
<body>

<?php
require 'views/header/header'.$header.'.php';
require 'views/body/body'.$body.'.php';
require 'views/footer/footer'.$footer.'.php';
?>

</body>
</html>

