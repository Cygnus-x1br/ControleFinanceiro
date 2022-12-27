<?php

namespace App;

class Connection
{

    public static function getDB()
    {
        try {
            $conn = new \PDO("mysql:host=192.168.0.21;dbname=financeiro;charset=utf8", "root", "@Czf0704");
            echo 'Connected...';
            return $conn;
        } catch (\PDOException $err) {
            echo $err->getMessage();
        }
    }
}
