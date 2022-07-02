<?php

use PerJobs\src\Back\ConnectionCreator;

require_once "/var/www/html/PerJobs/Autoload.php";

$aux = 1;

    switch ($aux) {
        case 1:
            $dateHour = date('Y/m/d H:i:s');
            $conn = ConnectionCreator::createConnection();
        
            $sqlInsert = "SELECT * FROM employeesPosts;";
            
            $statement = $conn->prepare($sqlInsert);
        
            try {
                $statement->execute();
            } catch (PDOException $e) {
               echo "Erro ao salvar postagem: $e";
            }

            $result = $statement->fetch(PDO::FETCH_ASSOC);

            echo json_encode($result);
            break;
        
        default:
            # code...
            break;
    }

   