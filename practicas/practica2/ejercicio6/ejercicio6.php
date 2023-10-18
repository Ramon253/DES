<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        div {
            margin: 10px;
        }
        .result h1{
            font-size: 100px;
        }
    </style>

</head>
<body>
<div class="container">
    <h1>Piedra papel o tijera</h1>

<?php
$numGames = $_POST["numberOfGames"];
$player1Play = $_POST["player1"];
$player2Play = $_POST["player2"];
$player1Wins = intval($_POST["player1Wins"]);
$player2Wins = intval($_POST["player2Wins"]);
$player1Img = "";
$player2Img = "";

/*Logica juego*/
if ($player2Play == $player1Play) {
    echo "<h2>Empate</h2>";
} else if (abs($player2Play - $player1Play) === 2) {

    if ($player1Play == 1) {
        $player1Wins++;
        echo "<h2>Perdiste</h2>";
    } else {
        echo "<h2>Victoria</h2>";
        $player2Wins++;
    }
} else if ($player2Play > $player1Play) {

    echo "<h2>Victoria</h2>";
    $player2Wins++;

} else {

    echo "<h2>Perdiste</h2>";
    $player1Wins++;
}

/*Aignacion de la imagen*/
$player1Name = ($_POST["player1Name"] == null) ? "Jugador 1" : $_POST["player1Name"];
$player2Name = ($_POST["player2Name"] == null) ? "Jugador 2" : $_POST["player2Name"];

switch ($player1Play) {
    case 1 :
        $player1Img = "piedra";
        break;
    case 2 :
        $player1Img = "papel";
        break;
    case 3:
        $player1Img = "tijera";
        break;
}

switch ($player2Play) {
    case 1 :
        $player2Img = "piedra";
        break;
    case 2 :
        $player2Img = "papel";
        break;
    case 3:
        $player2Img = "tijera";
        break;
}

?>
</div>
<div class="container" style="display: flex">
    <div>
        <h3><?= $player1Name ?></h3><br>
        <img src="../imgs/<?= $player1Img ?>.png" alt="<?= $player1Img ?>">
    </div>
    <div>
        <h3><?= $player2Name ?></h3><br>
        <img src="../imgs/<?= $player2Img ?>.png" alt="<?= $player2Img ?>">
    </div>
</div>
<div class="container, result">
    <h2><?= $player1Name ?> victorias : <?= $player1Wins ?></h2>
    <h2><?= $player2Name ?> victorias : <?= $player2Wins ?></h2>

<?php
if ($numGames == $player1Wins){
    echo "<h1>Victoria de $player1Name </h1>";
    return;
}
if ($numGames == $player2Wins){
    echo "<h1>Victoria de $player2Name </h1>";
    return;
}
?>
</div>
<div class="container">
    <form action="ejercicio6.php" method="post">
        <input name="player1Wins" type="hidden" value="<?= $player1Wins ?>">
        <input name="player2Wins" type="hidden" value="<?= $player2Wins ?>">
        <input id="player1Name" name="player1Name" type="hidden" value="<?= $player1Name ?>">
        <input id="player2Name" name="player2Name" type="hidden" value="<?= $player2Name ?>">
        <input id="numGames" name="numberOfGames" type="hidden" value="<?= $numGames ?>" required>
        <div>
            <br><label for="player1">Jugador 1</label><br>
            <select id="player1" name="player1" required>
                <option value="1">Piedra</option>
                <option value="2">Papel</option>
                <option value="3">Tijera</option>
            </select>
        </div>
        <div>
            <br><label for="player2">Jugador 2</label><br>
            <select id="player2" name="player2" required>
                <option value="1">Piedra</option>
                <option value="2">Papel</option>
                <option value="3">Tijera</option>
            </select><br><br>
        </div>
        <button type="submit">Intentar</button>
    </form>
</div>

</body>
</html>