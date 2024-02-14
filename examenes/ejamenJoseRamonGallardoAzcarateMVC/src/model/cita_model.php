<?php

namespace src\model;


use PDO;
use PDOException;

class cita_model
{
    //Query de delete ya creada en su 100%
    private static string $baseDeleteQuery = 'DELETE FROM cita where idcita= :idCita';
    //Query base de select
    private static string $baseSelectQuery = 'SELECT * FROM cita';
    //Query compleja de select
    private static string $innerJoinQuery = 'SELECT cita.idcita, userP.nombre as usuario_propone , userA.nombre as usuario_acepta, cita.fecha, cita.descripcion, cita.lugar_idlugar, cita.review_idreviewpropone, cita.review_idreview FROM cita inner join usuario userA on cita.usuario_acepta = userA.idusuario inner join usuario userP on cita.usuario_propone = userP.idusuario where lugar_idlugar = :idLugar';

    public static function borrarCita(PDO $pdo, $idCita): int
    {
        //uso la query de delete
        $query = self::$baseDeleteQuery;
        try {
            $stmt = $pdo->prepare($query);
            //Bindeo el valor idcita
            $stmt->bindValue(':idCita', $idCita);
            $stmt->execute();
            //devuelvo el rowCount
            // que devuelve 1 si borra una linea
            // devuelve 0 si borra 0 lineas (habria habido un problema)
            // devuelve -1 si ha habido algun error con la query
            $result = $stmt->rowCount();

            return $result;
        } catch (PDOException $e) {
            error_log($e);
            //si ya ha habido algun fallo con la bdd devuelve -1
            return -1;
        } finally {
            $pdo = null;
        }
    }

    public static function getCitas(PDO $pdo): ?array
    {
        //uso la query simple de get
        $query = self::$baseSelectQuery;

        try {
            $result = $pdo->query($query);
            //devuelvo como array asociativo
            $resultSet = $result->fetchAll(PDO::FETCH_ASSOC);
            return $resultSet;
        } catch (PDOException $e) {
            error_log($e);
            return null;
        } finally {
            $pdo = null;
        }
    }

    public static function getCitasLocalidad(PDO $pdo, $idLugar)
    {
        //uso la query compleja
        $query = self::$innerJoinQuery;

        try{
            $stmt = $pdo->prepare($query);
            //bindeo el idLugar
            $stmt->bindValue(':idLugar', $idLugar);
            $stmt->execute();
            //devuelvo un array de arrays asociativos
            $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultSet;
        }catch(PDOException $e){
            error_log($e);
            return null;
        }finally {
            $pdo = null;
        }
    }
}