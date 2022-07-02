<?php

namespace PerJobs\src\Back\Model\Posts;

interface Posts
{    
    public function descriptionVerification(string $description): void;
}
