<?php
require ('./consts.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen tema 2 de Jose Ramon Gallardo Azcárate</title>
</head>
<body>
<form action="./ejercicioExamen.php" method="post">
    <div>
        <label for="name"> Nombre</label>
        <input type="text" name="name" id="name" placeholder="Nombre del libro" required>
    </div>
    <div>
        <label for="physic">¿La tienda es en fisico?</label>
        <input type="checkbox" name="isPhysic" id="physic" >
    </div>
    <div>
        <label for="address">Direccion </label>
        <input type="text" name="address" id="address" placeholder="Direccion" required>
    </div>
    <div>
        <label for="province">Provincia </label>
        <select name="province" id="province" required>
            <?php
            foreach (PROVINCES as $province){
                print "<option value='".$province."'>$province</option>";
            }
            ?>
        </select>
    </div>
    <div>
        <label for="budget">Presupuesto</label>
        <input type="range" step="1" min="15" max="150" value="15" id="budget" name="budget" required>
        <span id="budgetOutput">15 €</span>
    </div>
    <div>
        <label for="openDate">Fecha de apertura</label>
        <input type="date" name="openDate" id="openDate" required>
    </div>
    <div>
        <label for="toms">Tomos de manga</label> <br>
        <textarea name="toms" id="toms" cols="30" rows="10" placeholder="Inserte los mangas" required></textarea>
    </div>
    <div>
        <button type="submit">Solicitar</button>
    </div>
</form>
<script>
    let output = document.getElementById(`budgetOutput`)
    let salaryInput = document.getElementById(`budget`)
    salaryInput.addEventListener("input", (e) => {
        e.preventDefault()
        output.innerHTML = salaryInput.value + " €"
    })

</script>
</body>
</html>
