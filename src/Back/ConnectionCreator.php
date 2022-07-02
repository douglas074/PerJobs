<?php

namespace PerJobs\src\Back;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $root = 'root';
        $host = 'localhost:3306';
        $pass = 'Cafezinho123!';
        $dbName = 'PerJobs';

        return new PDO("mysql: host={$host}; dbname={$dbName}", "$root", "$pass");
    }
}
