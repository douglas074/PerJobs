<?php

namespace Estudo\Projects\PerJobs\src\Back\Service\Jobs;

use Estudo\Projects\PerJobs\src\Back\Model\Jobs\Jobs;

class EmplyerJobs implements Jobs
{
    public array $jobs;

    public function __construct(string $jobs)
    {
        $this->jobs[] = $jobs;
    }

    public function jobsVerification(string $job): bool
    {
        if (array_search($job, $this->jobs)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function changeJobs(int $aux, string $newTypeJob, int $position): void
    {
        switch ($aux) {
            case 1:
                    //Alteração de trabalho
                    $this->jobs[$position] = $newTypeJob;
                break;
            
            case 2:
                    //Inserção de trabalho
                    $this->jobs[] = $newTypeJob;
                break;
            default:
                 $this->warning = "Função não encontrada, por favor tente novamente";
                break;
        }
    }

}
