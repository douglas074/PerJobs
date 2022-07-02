<?php
namespace Estudo\Projects\PerJobs\src\Back\Service\Accounts;

use Estudo\Projects\PerJobs\src\Back\Model\Accounts\User;
use Estudo\Projects\PerJobs\src\Back\Service\Jobs\EmplyeeJobs;

class Employee extends EmplyeeJobs implements User
{
    protected string $name;
    protected string $email;
    protected string $pass;
    protected int $age;
    protected bool $typeUser;
    protected string $warning;
    public EmplyeeJobs $jobs;

    public function __construct(string $name, string $email, string $pass, int $age, EmplyeeJobs $job)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->jobs = $job;

        if ($this->passVerification($pass)) {
            $this->pass = $pass;
        } else {
            $this->warning = "erro ao criar senha";
        }
    }

    public function getNome(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function changeName(string $name): void
    {
        $this->name = $name;
    }

    public function changeEmail(string $email): void
    {
        $this->email = $email;
    }

    public function changeAge(int $age): void
    {
        $this->age = $age;
    }

    public function changePass(string $pass): ?string
    {
        if ($this->pass == $pass) {
            return "A nova senha não pode ser igual a antiga";
        }
        if ($this->passVerification($pass) == true) {
            $this->pass = $pass;
        }
    }
    public function changeJob(int $aux, string $newJob, int $position): void
    {
        $this->typejob->changeJobs($aux, $newJob, $position);
    }

    public function passVerification(string $pass): bool
    {
        if (
            preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $pass)
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function nameVerification(string $name): void
    {
        $nameArray =  explode(" ", $name);
        $sizeName = count($nameArray);
        var_dump($sizeName);
        if($sizeName < 2)
        for($i = 0; $i <= $sizeName; $i++){

            if (strlen($name[0]) < 6) {
                echo "Seu nome é muito curto, acredito que não seja esse o verdadeiro....";
            } else {
                $this->name = ucwords($name);
            }
        }
       
    }
}
