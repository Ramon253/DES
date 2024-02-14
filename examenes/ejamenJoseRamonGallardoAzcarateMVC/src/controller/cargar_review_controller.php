<?php

use src\model\Utils;
use src\model\review_model;

require_once __DIR__ . '/../model/review_model.php';
require_once __DIR__ . '/../model/Utils.php';

//Si no se pasan ids de review redirecciono de nuevo a el listado
if (!isset($_GET["idPropose"]) || !isset($_GET["idAccept"])) {
    require_once __DIR__ . '/../controller/lista_citas_controller.php';
    exit(302);
}

//valido los datos
$idReviewAccept = Utils::validateData($_GET["idAccept"]);
$idReviewPropose = Utils::validateData($_GET["idPropose"]);

//me conecto a la base de datos
$pdo = Utils::dbConnect();

//Obtengo los reviews
$reviewAccept = review_model::getReview($pdo, $idReviewAccept);
$reviewPropose = review_model::getReview($pdo, $idReviewPropose);

//los paso como array asociativo
$reviews = [
    "accept" => $reviewAccept,
    "propose" => $reviewPropose
];
//requiero la vista
require __DIR__ . '/../view/mostrar_review_view.php';