<!Doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ejercicio5</title>
</head>
<body>

<form action="ejercicio5.php" method="post">
    <label for="numbers">
        <input type="text" id="numbers" name="numbers">
    </label>
    <label for="useFunc">
        Usar Funciones
        <input type="radio" name="useFunc" value="1" id="useFunc" checked required>
    </label>
    <label for="dontUseFunc">
        No usar funciones
        <input type="radio" name="useFunc" value="0" id="dontUseFunc">
    </label>
    <button type="submit">Mandar</button>
</form>
</body>
</html>