<?php

namespace Estudo\Projects\PerJobs\src\Back\Service\Accounts;

use Estudo\Projects\PerJobs\src\Back\Model\Accounts\User;
use Estudo\Projects\PerJobs\src\Back\Model\Jobs\Jobs;

class Employer extends Jobs implements User
{
    protected string $companyName;
    protected string $companyEmail;
    protected string $pass;
    protected bool $typeUser;
    protected string $warning;
    public Jobs $jobs;

    public function __construct(string $name, string $email, string $pass, Jobs $job)
    {
        $this->name = $name;
        $this->email = $email;
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
        if (strlen($name) < 6) {
            echo "Seu nome é muito curto, acredito que não seja esse o verdadeiro....";
        } else {
            $this->name = ucwords($name);
        }
    }
}