<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-sm">
    <form method="post" action="ejem3form.php" >
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Nombre de usuario"
                   aria-describedby="basic-addon1" name="userName">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre de usuario del destinatario"
                   aria-label="Nombre de usuario del destinatario" aria-describedby="basic-addon2" name="target">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>

        <label for="basic-url" class="form-label">Tu URL</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="web">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">$</span>
            <input type="text" class="form-control" aria-label="Cantidad (al dólar más cercano)" name="netWorth">
            <span class="input-group-text">.00</span>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre de usuario" aria-label="Nombre de usuario" name="userNameServer">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" placeholder="Servidor" aria-label="Servidor" name="server">
        </div>

        <div class="input-group">
            <span class="input-group-text">Con textarea</span>
            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>

    </form>

</div>

</body>
</html>

