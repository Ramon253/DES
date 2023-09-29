<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ejercicio 9 </title>
</head>
<body>
<h1>Inserte su nombre y direccion </h1>
<form action="results9.php" method="post">
    <div class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                   aria-describedby="basic-addon1" name="userName">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion"
                   aria-describedby="basic-addon1" name="adress">
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </div>
</form>
</body>
</html>

