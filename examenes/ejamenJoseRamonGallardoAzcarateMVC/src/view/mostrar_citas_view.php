<!--Si no hay places es que o a, se ha cargado el view sin pasar por el controller o que ha habido un fallo en el
controller, en ambos casos no queremos que el fallo pase de aqui  -->
<?php if (!isset($places)) {
    echo 'Ha habido un problema intentelo de nuevo';
    exit(500);
} ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas view</title>
    <style>
        table, td, th {
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
            padding: 1rem;
        }
        *{
            font-family: "Roboto", sans-serif;
            
        }
    </style>
</head>
<body>


<form action="lista_citas_controller.php" method="post">
    <label for="place">Lugares</label>
    <select name="place" id="place">
        <option value="-1">Todos</option>
        <!--Saco dinamicamnte todos los places en el select-->
        <?php foreach ($places as $place): ?>
            <option value="<?= $place['idlugar'] ?>">
                <?= $place["nombre"] ?> : <?= $place["provincia"] ?>
                / <?= $place["localidad"] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">
        Ver citas
    </button>
</form>
<!--Si no hay variable $cites quiere decir que no se ha ejecutado el formulario, por lo que el archivo termina aqui-->
<?php if (!isset($cites)) {
    print '</body></html>';
    exit(200);
} ?>

<!--Si ha llegado aqui es que hay citas-->
<form action="borrar_citas_controller.php" method="post">
    <table>
        <!--Créo una fila de solo headers por estética-->
        <tr>
            <th>Id cita</th>
            <th>Usuario Propone</th>
            <th>Usuario Acepta</th>
            <th>fecha</th>
            <th>descripción</th>
            <th>Id Lugar</th>
            <th>Id review usuario propone</th>
            <th>Id review usuario acepta</th>
            <th>Ver review</th>
            <th>Eliminar</th>
        </tr>
        <!--Recorro todas la citas y saco en cada td sus datos-->
        <?php foreach ($cites as $cite): ?>
            <tr>
                <th><?= $cite["idcita"] ?></th>
                <td><?= $cite["usuario_propone"] ?></td>
                <td><?= $cite["usuario_acepta"] ?></td>
                <td><?= $cite["fecha"] ?></td>
                <td><?= $cite["descripcion"] ?></td>
                <td><?= $cite["lugar_idlugar"] ?></td>
                <td><?= $cite["review_idreviewpropone"] ?></td>
                <td><?= $cite["review_idreview"] ?></td>
                <!--Pongo un link con los ids de los reviews como param-->
                <td>
                    <a href="cargar_review_controller.php?idPropose=<?= $cite["review_idreviewpropone"] ?>&idAccept=<?= $cite["review_idreview"] ?>">
                        Ver review
                    </a>
                </td>
                <!--checkbox con valor del idCita para eliminarla, (se pasa como array)-->
                <td><input type="checkbox" name="deleteCite[]" value="<?= $cite['idcita'] ?>"></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!--Atributo hidden para que cuando se eliminen las citas en borrar_citas_controller se mantenga el listado previo,
    esto es porque en el controller de listado saco el listado en funcion de $_POST["place"] entonces al hacer un require
    de ese controlador desde el controller de borrar_datos tome como parametro del listado este input-->
    <input type="hidden" name="place" value="<?= $_POST['place'] ?>">
    <button type="submit">
        Borrar citas
    </button>
</form>
</body>
</html>
