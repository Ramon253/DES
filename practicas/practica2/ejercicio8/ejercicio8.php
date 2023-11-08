<?php
const SAMPLE = ['J' => 11, 'Q' => 12, 'K' => 13, 'A' => 14];
$hand = [$_POST["Primera"], $_POST["Segunda"], $_POST["Tercera"], $_POST["Cuarta"], $_POST["Quinta"]];
$suits = [];
$displayValues = [];
$numericValues = [];


$color = false;
$full = false;
$poker = false;
$straight = false;


if (count(array_unique($hand)) != 5){
    echo " <h1>Inserte 5 cartas distintas</h1>";
    echo "<form action='index.php'>";
    echo "<button type='submit'>Intentar de nuevo</button>";
    echo "</form>";
    return;
}

foreach ($hand as $card) {
    if ($card[0] == 1) {
        $displayValues[] = 10;
        $suits[] = substr($card, 2);
        continue;
    }

    $suits[] = substr($card, 1);
    if (!is_numeric($card[0])){
        $numericValues[] = SAMPLE[$card[0]];
        $displayValues[] = $card[0];
        continue;
    }

    $displayValues[] = $card[0];
    $numericValues[] = intval($card[0]);
}

$sortedNumbers = $numericValues;
sort($sortedNumbers);

//check if is color
if (count(array_unique($suits)) == 1) {
    $color = true;
}

//check if is full or poker
if(count(array_unique($displayValues))== 2){
    if ($sortedNumbers[1]  !== $sortedNumbers[3]) $full = true;
    else $poker = true;
}

//check if is straigt
for ($i = 0; $i < count($sortedNumbers)-1;) {
    if ($sortedNumbers[$i] === ($sortedNumbers[++$i]) - 1) {
        $straight = true;
        continue;
    }
    $straight = false;
    break;
}

?>

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
<h1>Tus cartas:</h1>
<?php

if ($color) {
    if ($straight)
        echo "<h1>ESCALERA DE COLOR</h1>";
    else
        echo "<h1>TIENES COLOR</h1>";

} elseif ($straight) {
    echo '<h1>TIENES ESCALERA</h1>';
}

if ($full)
    echo "<h1>TIENES UN FULL</h1>"

?>

<div style="display: flex">
    <?php

    for ($i = 0; $i < count($hand); $i++) {
        echo '<span style="width: 150px;  height: 250px;border: solid 2px; display: grid; border-radius: 10px;margin: 20px">';

        echo '<span style="place-self: start;margin:10px 0 0 10px;font-size: 25px;display: grid">';
        echo $displayValues[$i] . '<img src="../imgs/cards/' . $suits[$i] . '.png" style="height: 15px;width: 15px" alt="' . $suits[$i] . '">';
        echo '</span>';

        echo '<span style="place-self: center;height: 50%">';
        echo '<img src="../imgs/cards/' . $suits[$i] . '.png" style="height: 40px;width: 40px" alt="'.$suits[$i].'">';
        echo '</span>';

        echo '<span style="place-self: end;margin:0 10px 10px 0;font-size: 25px;display: grid;transform: rotate(180deg)">';
        echo $displayValues[$i] . '<img src="../imgs/cards/' . $suits[$i] . '.png" style="height: 15px;width: 15px" alt="' . $suits[$i] . '">';
        echo '</span>';
        echo '</span>';
    }
    ?>
</div>
</body>
</html>
