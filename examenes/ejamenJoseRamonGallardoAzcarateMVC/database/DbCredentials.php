<?php

//Clase para las credenciales de la base de datos
 /*
 * Readonly significa que no se puede asignar, es equivalente a crear todas las propiedades en private y establecer
 * solo getters
 * */
namespace database;
readonly class DbCredentials
{
    /**
     * @param string $host
     * @param string $dbName
     * @param string $userName
     * @param string $password
     */
    //Al establecer los params como public se asignan automaticamente como propiedades del objeto
    public function __construct(
        public string $host,
        public string $dbName,
        public string $userName,
        public string $password)
    {}

}