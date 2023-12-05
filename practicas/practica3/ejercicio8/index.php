<!Doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>ejercicio8</title>
</head>
<body>
<form action="ejercicio8.php" method="post">
    <div>
        <label for="commands">Comandos</label>
        <textarea name="commands" id="commands" cols="60"
                  placeholder="[S-Menu superior/I-Menu inferior][orden del menu]-[nombre menu]-[Color Letra]-[url destino]"
                  rows="10"></textarea>
    </div>
    <div class="checkArea">
        <?php
        for ($i = 0; $i < 4; $i++) {
            print '<div>';
            for ($j = 0; $j < 4; $j++) {
                print "<input type='checkbox' name='gridTable[]' value='$i$j'>";
            }
            print '</div>';
        }
        ?>
    </div>
    <button type="submit">Mandar</button>
</form>
</body>
</html>