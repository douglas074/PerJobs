<?php

namespace PerJobs\src\Back\Service\Posts;

use PDOException;
use PerJobs\src\Back\Service\Sweep\ForbiddenWords;

require_once("/var/www/html/PerJobs/Autoload.php");

class NewPostEmployer 
{
    use ForbiddenWords;

    private string $description;
    private string $title;
    private array $typeJob;
    private int $vacancies;
    private int $typeUser;
    public array $auxCounter;

    public function __construct(string $description, string $title, array $typeJob, int $vacancies, int $typeUser)
    {
        $this->auxCounter = [
            0 => 1,
            //userWarning' 
            1 => '',
            //vacanciesWarning' 
            2 => '',
            //'descriptionWarning' 
            3 => '',
            //'titleWarning'
            4 => '',
            //'wordsTitle' 
            5 => '',
            //'wordsDescription'
            6 => '',
            //'saveError'
            7 => ''
        ];
        $this->userVerfication($typeUser);
        $this->descriptionVerification($description);
        $this->titleVerification($title);
        $this->vacanciesVerification($vacancies);

        if ($this->auxCounter[0]) {
            $this->typeUser = $typeUser;
            $this->description = $description;
            $this->title = $title;
            $this->vacancies = $vacancies;
        }
        
        $this->typeJob = $typeJob;

    }

    public function saveSynstem()
    {
        if ($this->auxCounter[0]) {
            $dateHour = date('Y/m/d H:i:s');
            $conn = \PerJobs\src\Back\ConnectionCreator::createConnection();

            $sqlInsert = "INSERT INTO employersPosts (userId, title, description, jobs, vacancies, registration_time) VALUES (:userId, :title, :description,  :jobs, :vacancies, :registration_time);";
            
            $statement = $conn->prepare($sqlInsert);

            $statement->bindParam(':userId', $this->typeUser);
            $statement->bindParam(':description', $this->description);
            $statement->bindValue(':title', $this->title);
            $statement->bindValue(':jobs', $this->typeJob);
            $statement->bindValue(':vacancies', $this->vacancies);
            $statement->bindValue(':registration_time', $dateHour);

            try {
                $statement->execute();
            } catch (PDOException $e) {
                $this->auxCounter[7] = "Erro ao salvar postagem: $e";
                return false;
            }
            return true;

        }else{
            return false;
        }
        
    }
    
    public function statusVerificator()
    {
        if ($this->auxCounter[0]) {
            if($this->saveSynstem()){
                return 'Sua postagem foi feita...';
            }
            $aux = $this->auxCounter[7];
            return "<p>$aux</p>";
        }
        return $this->auxCounter;
    }

    public function userVerfication(int $typeUser)
    {
        if ($typeUser != 0 && $typeUser != 1 ) {
            $this->auxCounter[1] = 'Tipo de usuário não identificado';
            $this->auxCounter[0] = false;
        }
    }

    public function vacanciesVerification(int $vacancies): void
    {
        if ($vacancies <= 0 || $vacancies >= 100) {
            $this->auxCounter[2] = "As vagas tem que estar entre 0 e 100...";
            $this->auxCounter[0] = false;
        }
    }

    public function descriptionVerification(string $description): void
    {
        if (strlen($description) <= 30) {
            $this->auxCounter[3] = "Sua descrição é curta demais...";
            $this->auxCounter[0] = false;
        }
        $this->verificationWords($description, 'na sua descrição, por favor, faça uma descrição mais adequada',6);
    }

    public function titleVerification(string $title)
    {
        if (strlen($title) <= 10) {
            $this->auxCounter[4] = "Seu titúlo é muito curto...";
            $this->auxCounter[0] = false;
        } 
        $this->verificationWords($title, 'o seu titúlo, por favor, faça um titúlo mais adequado', 5);
    }

    public function verificationWords(string $text, string $auxText, string $positionVar): void
    {
        if ($this->VerficationWords($text)) {
            $this->auxCounter[$positionVar] = "Há palavras feias $auxText ...";
            $this->auxCounter[0] = false;
        }
    }

   
}