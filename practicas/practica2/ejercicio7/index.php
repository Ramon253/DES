<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="../css/index7.css">
</head>
<body>
<div class="container">
    <h1>Responda al cuestionario </h1><br>
    <form action="ejercicio7.php" method="post" id="input">
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" placeholder="Nombre" required>
        </div>

        <div>
            <label for="salaryInput">Sueldo</label>
            <input type="range" class="rangeInput" name="salary" id="salaryInput" max="120000" step="100" value="0"
                   required>
            <span id="salaryOutput"></span>
        </div>


        <div>
            <h3>Sexo</h3>
            <main class="radioContainer">
                <label for="male">Hombre
                    <input type="radio" name="sex" id="male" value="M" required>
                </label>

                <label for="female">Mujer
                    <input type="radio" name="sex" id="female" value="F" required>
                </label>
            </main>
        </div>


        <div class="select">
            <label for="age" class="select">Edad</label>
            <select name="age" id="age" required>
                <?php for ($i = 0; $i < 140; $i++) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                } ?>
            </select>
        </div>
        <button type="submit">Enviar</button>
    </form>
</div>
<!--Script para darle estetica al boton range-->
<script src="../js/rangeInput.js"></script>
</body>
</html>
