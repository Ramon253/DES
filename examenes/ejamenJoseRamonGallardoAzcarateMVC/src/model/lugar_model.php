<?php

namespace src\model;

use PDO;
use PDOException;

class lugar_model
{
    private static string $baseSelectQuery = 'SELECT * FROM lugar';

    public static function getLugares(PDO $pdo): ?array
    {
        //solo necesito la query base
        $query = self::$baseSelectQuery;
        try {
            //ejecuto la query y devuelvo los datos como arrays asociativos
            $result = $pdo->query($query);
            $resultSet = $result->fetchAll(PDO::FETCH_ASSOC);
            return $resultSet;
        } catch (PDOException $e) {
            error_log($e);
            return null;
        } finally {
            $pdo = null;
        }
    }

}