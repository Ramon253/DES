<?php
if (!isset($reviews)) {
    print 'No hay reviews';
    exit(200);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reviews</title>
    <style>
        *{
            font-family: "Roboto", sans-serif;

        }
        body{
            display: flex;
            flex-flow: column;
            gap: 2rem;
            place-items: center;
            place-content: center;
        }
        h2  {
            padding: 1rem;
            border-radius: 5px;
            background: #1abc9c;
        }
        div{
            display: flex;
            flex-flow: column;
            place-content: center;
            place-items: center;
            padding: 1rem;
            background: #1a1f29;
            color: whitesmoke;
            border-radius: 1rem;
        }
    </style>
</head>
<body>
<div>
    <h2>Accept user review</h2>
    <!--Si reviews en accept es false es que no existe una review con esa id en la bdd
    por lo que compruebo eso justo aqui-->
    <?php if ($reviews["accept"]): ?>
        <ul>
            <!--Recorro cada dato como un li de un ul-->
        <?php foreach ($reviews["accept"] as $key => $reviewValue): ?>
            <li><h3><?= $key ?> : <?= $reviewValue ?></h3></li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
    <!--Si es false-->
        <h2>No hay reviews de este usuario</h2>
    <?php endif; ?>
</div>
<div>
    <h2>Propose user review</h2>
    <?php if ($reviews["propose"]): ?>
        <ul>
        <?php foreach ($reviews["propose"] as $key => $reviewValue): ?>
            <li> <h3><?= $key ?> : <?= $reviewValue ?></h3> </li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <h2>No hay reviews de este usuario</h2>
    <?php endif; ?>
</div>
</body>
</html>
