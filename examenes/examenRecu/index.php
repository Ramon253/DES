<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>
<body>
<h1>Solicitud de ayuda</h1>
<form action="examen.php" method="post">
    <div>
        <label for="name">
            Nombre
            <input type="text" name="name" id="name">
        </label>
    </div>
    <div>
        <label for="age">Edad</label>
        <select name="age" id="age">
            <?php
            for ($i = 0; $i < 140; $i++) {
                print "<option value='$i'>$i</option>";
            }

            ?>
        </select>
    </div>
    <div>
        <label for="single">Soltero<input type="radio" name="state" value="single" id="single"></label>
        <label for="married">Casado<input type="radio" name="state" value="married" id="married"></label>
        <label for="divorced">Divorciado<input type="radio" name="state" value="divorced" id="divorced"></label>
    </div>
    <div>
        <label for="salary">
            Sueldo
            <select name="salary" id="salary">
                <?php
                for ($j = 0; $j <= 50000; $j += 10000) {
                    $nextVal = $j + 9999;
                    if ($j === 50000)
                        print "<option value='$j'>Mas de $j € </option>";
                    else
                        print "<option value='$j'>Entre $j €  y $nextVal €</option>";
                }
                ?>
            </select>
        </label>
    </div>
    <div>
        <label for="sons">
            Hijos
            <textarea name="children" id="sons" cols="30" rows="10" placeholder=""></textarea>
        </label>
    </div>
    <div>
        <label for="houses">
            Domicilio
            <textarea name="houses" id="houses" cols="30" rows="10" placeholder=""></textarea>
        </label>
    </div>

    <div>
        <button type="submit">
            Enviar
        </button>
    </div>
</form>
</body>
</html>
