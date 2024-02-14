<?php

namespace src\model;

use database\DbCredentials;
use PDO;
use PDOException;

require __DIR__ . '/../../database/DbCredentials.php';

class Utils
{

    //Conexion a la bdd, puede devolver un PDO o null
    public static function dbConnect(): PDO
    {
        $config = require __DIR__ . '/../../database/config.inc';
        $credentials = new DbCredentials(...$config);

        try {
            return new PDO("mysql:host=$credentials->host;dbname=$credentials->dbName", $credentials->userName, $credentials->password);
        } catch (PDOException $e) {
            error_log($e);
            //Si hay un fallo en la conexion el programa no pasa de aqui
            print '<H1>Fallo en la conexion con la base de datos</H1>';
            die(500);
        }
    }

    //Funcion basica de validar datos
    public static function validateData($data): string
    {
        $validatedData = trim($data);
        $validatedData = stripslashes($validatedData);
        $validatedData = htmlspecialchars($validatedData);

        return $validatedData;
    }


}
