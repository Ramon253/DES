<?php
$dices = array();
$isStraight = true;
$isDouble = false;
$isTriple = false;
$isPoker = false;

//Generacion de los dados
for ($i = 0; $i < 3; $i++) {
    $dices[] = rand(1, 6);
}

//Ordenado de los datos sin usar  mayor a menor
$sortedDices = [$dices[0], $dices[0], $dices[0]];

//Recorro los dados
for ($j = 1; $j < 3; $j++) {
    //si es mayor que el primero desplazo y coloco
    if ($sortedDices[0] < $dices[$j]) {
        $sortedDices[1] = $sortedDices[0];
        $sortedDices[0] = $dices[$j];
    }
    //si es menor que el ultimo desplazo y coloco
    elseif ($sortedDices[2] > $dices[$j]) {
        $sortedDices[1] = $sortedDices[2];
        $sortedDices[2] = $dices[$j];
    } else //si no va en el medio
        $sortedDices[1] = $dices[$j];
}



//Ya ordenado el array compruebo si es escalera
$prevPos = $sortedDices[0];
for ($i = 1; $i < count($sortedDices); $i++) {
    if ($prevPos === $sortedDices[$i] +1){
        $prevPos = $sortedDices[$i];
        continue;
    }
    $isStraight = false;
    break;
}

//Compruebo si es pareja o trio
if ($sortedDices[0] === $sortedDices[1] || $sortedDices[1] === $sortedDices[2]) {
    if ($sortedDices[0] === $sortedDices[2]) {
        $isTriple = true;
        if ($sortedDices[0] === 1) $isPoker = true;

    } else $isDouble = true;
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href=".././css/ejercicio4.css">
</head>
<body>
<main>
<?php
//Saco por pantalla el resultado
if ($isStraight) {
    echo "<h1>Te ha tocado escalera</h1>";
} elseif ($isTriple) {
    if ($isPoker)
        echo "<h1>Te ha tocado Poker</h1>";
    else
        echo "<h1>Te ha tocado Trio</h1>";
} elseif ($isDouble)
    echo "<h1>Te ha tocado Pareja</h1>";
else
    echo "<h1>No te ha salido nada </h1>";


echo "<div class='imgContainer'>";
echo '<img src="../imgs/dice/dice' . $dices[0] . '.jpg" alt="dice' . $dices[0] . '"> ';
echo '<img src="../imgs/dice/dice' . $dices[1] . '.jpg" alt="dice' . $dices[1] . '">';
echo '<img src="../imgs/dice/dice' . $dices[2] . '.jpg" alt="dice' . $dices[2] . '">';
echo "</div>";

?>
<form action="ejercicio4.php" method="post">
    <button type="submit">Tirar dados</button>
</form>
</main>
</body>
</html>

