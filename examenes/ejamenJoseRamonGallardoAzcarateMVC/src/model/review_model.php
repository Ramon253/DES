<?php

namespace src\model;

use PDO;
use PDOException;

class review_model
{
    private static string $baseSelectQuery = 'SELECT * FROM review';

    public static function getReview(PDO $pdo, $idReview): ?array
    {
        //A la query  base le agrego el where
        $query = self::$baseSelectQuery . ' WHERE idreview=:idReview';

        try {
            $stmt = $pdo->prepare($query);
            //Bindeo el valor
            $stmt->bindValue(':idReview', $idReview);
            $stmt->execute();

            //Obtengo el resultado como array asociativo
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            error_log($e);
            return null;
        } finally {
            //cierro conexion
            $pdo = null;
        }
    }
}