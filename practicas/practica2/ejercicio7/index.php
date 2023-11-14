<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        div{
            margin: 20px;
        }

    </style>
</head>
<body>
<div  class="container">
    <h1>Responda al cuestionario </h1><br>
    <form action="ejercicio7.php" method="post" id="input">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>

        <div>
            <label for="salaryInput">Sueldo</label>
            <input type="range" class="rangeInput" name="salary" id="salaryInput" max="120000" step="100" value="0"  required>
            <span id="salaryOutput"></span>
        </div>


        <div>
            <label for="sex"><strong>Sexo</strong></label><br>
            <label for="male">Hombre </label>
            <input type="radio" name="sex" id="male" value="M" required>

            <label for="female">Mujer </label>
            <input type="radio" name="sex" id="female" value="F" required>
        </div>


        <div>
            <label for="age">Edad</label>
            <select name="age" id="age" required    >
                <?php for ($i = 0; $i < 140; $i++) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                } ?>
            </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
<!--Script para darle estetica al boton range-->
<script src="../js/rangeInput.js"></script>
</body>
</html>
