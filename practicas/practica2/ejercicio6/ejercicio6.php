<?php
$options = ["piedra", "papel", "tijera"];
$numGames = $_POST["numberOfGames"];
$player1Play = rand(1,3);
$player2Play = rand(1,3);
$player1Wins = intval($_POST["player1Wins"]);
$player2Wins = intval($_POST["player2Wins"]);
$player1Img = "";
$player2Img = "";
$player1Name = ($_POST["player1Name"] == null) ? "Jugador 1" : $_POST["player1Name"];
$player2Name = ($_POST["player2Name"] == null) ? "Jugador 2" : $_POST["player2Name"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="../css/ejercicio6.css">
</head>
<body>
<main>
    <header>
    <h1>Piedra papel o tijera</h1>
<?php
/*Logica juego*/
if ($player2Play == $player1Play) {
    echo "<h2>Empate</h2>";
} else if (abs($player2Play - $player1Play) === 2) {

    if ($player1Play == 1) {
        $player1Wins++;
        echo "<h2>Victoria de " . $player1Name . "</h2>";
    } else {
        echo "<h2>Victoria  de " . $player1Name . "</h2>";
        $player2Wins++;
    }
} else if ($player2Play > $player1Play) {
    echo "<h2>Victoria de " . $player2Name . "</h2>";
    $player2Wins++;
} else {
    echo "<h2>Victoria de " . $player1Name . "</h2>";
    $player1Wins++;
}

/*Asignacion de la imagen*/

$player1Img = $options[$player1Play - 1];
$player2Img = $options[$player2Play - 1];
?>
    </header>
    <div class="container">
    <div>
        <h3><?= $player1Name ?></h3>
        <img src="../imgs/rock/<?= $player1Img ?>.png" alt="<?= $player1Img ?>">
    </div>
    <div>
        <h3><?= $player2Name ?></h3>
        <img src="../imgs/rock/<?= $player2Img ?>.png" alt="<?= $player2Img ?>">
    </div>
</div>
    <div class="container result">
        <?php
        if ($numGames == $player1Wins) {
            echo "<h1>Victoria de $player1Name </h1>";
            return;
        }
        if ($numGames == $player2Wins){
            echo "<h1>Victoria de $player2Name </h1>";
            return;
        }
        ?>
        <h2>Victorias de <?= $player1Name ?> : <?= $player1Wins ?></h2>
        <h2>Victorias de <?= $player2Name ?> : <?= $player2Wins ?></h2>
    </div>
    <div>
    <form action="ejercicio6.php" method="post">
        <input name="player1Wins" type="hidden" value="<?= $player1Wins ?>">
        <input name="player2Wins" type="hidden" value="<?= $player2Wins ?>">
        <input id="player1Name" name="player1Name" type="hidden" value="<?= $player1Name ?>">
        <input id="player2Name" name="player2Name" type="hidden" value="<?= $player2Name ?>">
        <input id="numGames" name="numberOfGames" type="hidden" value="<?= $numGames ?>" required>
        <button type="submit">Piedra papel o tijera!!</button>
    </form>
</div>
</main>
</body>
</html>