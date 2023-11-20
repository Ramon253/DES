<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practicas</title>
    <link rel="stylesheet" href="./practica2/css/index.css">
</head>
<body>
<h1>Practicas </h1>
<main>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo '<a href="practica' . $i + 1 . '" target="_blank">Practica ' . $i + 1 . '</a>';
    }
    ?>
</main>
</body>
</html>

