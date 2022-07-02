<?php

namespace Estudo\Projects\PerJobs\src\Back\Model\Jobs;

interface Jobs
{
    public function jobsVerification(string $job): bool;
    
    public function changeJobs(int $aux, string $newTypeJob, int $position): void;
}
