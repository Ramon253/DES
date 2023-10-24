<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
<form action="ejercicio4.php" method="post">
    <button type="submit">Tirar dados</button>
</form>
<?php
$rolledDices = array();

for ($i = 0; $i < 3; $i++) {
    $rolledDices[] = rand(1,6);
}

echo '<img src="../imgs/dice' . $rolledDices[0] . '.jpg" alt="dice' . $rolledDices[0] . '"><br> ';
echo '<img src="../imgs/dice' . $rolledDices[1] . '.jpg" alt="dice' . $rolledDices[1] . '"><br>';
echo '<img src="../imgs/dice' . $rolledDices[2] . '.jpg" alt="dice' . $rolledDices[2] . '"><br>';

$sortedDices = $rolledDices;
$checkUnique = array_unique($rolledDices);
sort($sortedDices);


if ($rolledDices == $sortedDices){
    echo $sortedDices[0] . " ". $sortedDices[1] . " ". $sortedDices[2];
    echo "<h1>Escalera</h1>";
}

echo $rolledDices[0] . " " .$rolledDices[1] . " " . $rolledDices[2];

?>
</body>
</html>

