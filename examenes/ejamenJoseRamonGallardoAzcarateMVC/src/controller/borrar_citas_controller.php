<?php

use src\model\cita_model;
use src\model\Utils;

require_once __DIR__ . '/../model/cita_model.php';
require_once __DIR__ . '/../model/Utils.php';

//si no se ha pasado citas a borrar redirecciono a el listado
if (!isset($_POST["deleteCite"])) {
    require __DIR__ . '/lista_citas_controller.php';
    exit(304);
}

//me conecto
$pdo = Utils::dbConnect();
//recorro el array de ids de citas
foreach ($_POST["deleteCite"] as $citeId) {
    //Borro la cita con el id validado
    $result = cita_model::borrarCita($pdo, Utils::validateData($citeId));
    //Si el result es 1 es que se ha borrado con exito
    if ($result === 1)
        print "Cita : $citeId ha sido borrada con exito <br>";
    else //si no es que ha habido un problema
        print "Ha habido un problema borrando la cita : $citeId (o  ya ha sido borrada) <br>";
}

//requiero la vista
require __DIR__ . '/lista_citas_controller.php';