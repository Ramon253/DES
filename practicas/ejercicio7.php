<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>Dado 1 : <?php echo rand(1, 10) ?></h1>
<h1>Dado 2 : <?php echo rand(1, 20) ?></h1>
<h1>Dado 3 : <?php echo rand(1, 100) ?></h1>
<div class="col-12">
    <button class="btn btn-primary" onclick="location.reload()" type="button">Tirar</button>
</div>
</body>
</html>


