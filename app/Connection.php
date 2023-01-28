<?php

namespace App;

class Connection
{

    public static function getDB()
    {
        try {
            $conn = new \PDO("mysql:host=189.55.192.184;dbname=cash_control;charset=utf8", "jean", "@Czf0704");
            // echo 'Connected...';
            return $conn;
        } catch (\PDOException $err) {
            echo $err->getMessage();
        }
    }
}
