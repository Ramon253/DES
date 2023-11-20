<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="../css/index6.css">
</head>
<body>
<main>
    <div class="container">
        <h1>Piedra papel o tijera</h1>
        <form action="ejercicio6.php" method="post">
            <input name="player1Wins" type="hidden" value="0">
            <input name="player2Wins" type="hidden" value="0">

            <div>
                <label for="player1Name">Inserte el nombre del jugador 1</label>
                <input id="player1Name" name="player1Name" type="text" placeholder=" Jugador 1">
            </div>
            <div>
                <label for="player2Name">Inserte el nombre del jugador 2</label>
                <input id="player2Name" name="player2Name" type="text" placeholder="Jugador 2">
            </div>
            <div>
                <label for="numGames">Numero de partidas a jugar</label>
                <input id="numGames" name="numberOfGames" type="number" placeholder="Al mejor de " required>
            </div>
            <button type="submit">Intentar</button>
        </form>
    </div>
</main>
</body>
</html>