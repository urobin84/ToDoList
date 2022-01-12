<?php
namespace config {

    class Database{

        static function getConnection():\PDO
        {
            $host       = "127.0.0.1";
            $port       = 3306;
            $database   = "belajar_php_todolist";
            $username   = "root";
            $password   = "root";

            return new \PDO("mysql:host=$host:$port;dbnames=$database", $username, $password);
        }
    }
}