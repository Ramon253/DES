<?php

namespace src\model;

use PDO;
use PDOException;

class usuario_model
{
    private static string $baseSelectQuery = 'SELECT * FROM usuario';

    public static function getUsuarios(PDO $pdo): ?array
    {
        $query = self::$baseSelectQuery;

        try {
            $result = $pdo->query($query);
            //Hago fetch  con PDO::FETC_ASSOC de param para que solo devuelva un array asociativo con los datos
            $resultSet = $result->fetchAll(PDO::FETCH_ASSOC);
            return $resultSet;
        } catch (PDOException $e) {
            error_log($e);
            return null;
        } finally {
            //cierro conexion
            $pdo = null;
        }
    }

}