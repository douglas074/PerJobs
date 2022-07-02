<?php

namespace Estudo\Projects\PerJobs\src\Back\Model\Accounts;

interface User
{
    public function changeName(string $name): void;

    public function changeEmail(string $email): void;

    public function changeAge(int $age): void;

    public function changePass(string $pass): ?string;

    public function passVerification(string $pass): bool;
}
