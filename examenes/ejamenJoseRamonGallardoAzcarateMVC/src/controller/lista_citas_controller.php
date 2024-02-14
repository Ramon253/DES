<?php

use src\model\cita_model;
use src\model\lugar_model;
use src\model\Utils;


require_once __DIR__ . '/../model/cita_model.php';
require_once __DIR__ . '/../model/lugar_model.php';
require_once __DIR__ . '/../model/Utils.php';

//inicio la conexion
$pdo = Utils::dbConnect();

//obtengo todos los lugares
$places = lugar_model::getLugares($pdo);

//si no hay place como postParam no hago nada mas y requiero la vista
if (!isset($_POST["place"])) {
    require __DIR__ . '/../view/mostrar_citas_view.php';
    exit(200);
}

//si se ha pasado un place lo valido
$place = Utils::validateData($_POST["place"]);

//si es -1 es que es la opcion default que es todos por lo que devuelvo todas las citas
if (intval($place) === -1) {
    $cites = cita_model::getCitas($pdo);
} else {
    //si no devuelvo las citas de dicha localidad
    $cites = cita_model::getCitasLocalidad($pdo, $place);
    //Si no devuelve nada no hay citas en esa ubicación
    if (!isset($cites)) print 'No hay citas en esa ubicación';
}
//requiero la vista
require __DIR__ . '/../view/mostrar_citas_view.php';

