<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet">
    <style>
        div{
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 20px">
    <h1>Piedra papel o tijera</h1>
    <form action="ejercicio6.php" method="post">
        <input name="player1Wins" type="hidden" value="0">
        <input name="player2Wins" type="hidden" value="0">

        <div>
            <label for="player1Name">Inserte el nombre del jugador 1</label><br>
            <input id="player1Name" name="player1Name" type="text" >
        </div>
        <div>
            <br><label for="player2Name">Inserte el nombre del jugador 2</label><br>
            <input id="player2Name" name="player2Name" type="text" >
        </div>
        <div>
            <br><label for="numGames">Numero de partidas a jugar</label><br>
            <input id="numGames" name="numberOfGames" type="number" required>
        </div>
        <div>
            <br><label for="player1">Jugador 1</label><br>
            <select id="player1" name="player1" required>
                <option value="1">Piedra</option>
                <option value="2">Papel</option>
                <option value="3">Tijera</option>
            </select>
        </div>
        <div>
            <br><label for="player2" >Jugador 2</label><br>
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