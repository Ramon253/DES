<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <title>Ejercicio 9</title>

</head>
<body>
<main >
    <h1>Ejercicio 9</h1>
    <form action="ejercicio9.php" method="post">
        <div>
            <label for="header">Encabezado</label>
            <select name="header" id="header">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <label for="body">Cuerpo</label>
            <select name="body" id="body">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <label for="footer">Pie de pagina</label>
            <select name="footer" id="footer">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <label for="css">Estilo</label>
            <select name="css" id="css">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <button type="submit">enviar</button>
    </form>
</main>
</body>
</html>