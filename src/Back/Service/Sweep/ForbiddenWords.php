<?php

namespace PerJobs\src\Back\Service\Sweep;

trait ForbiddenWords
{
    public static function VerficationWords(string $text): bool
    {
        $forbiddenWords = ['Puta', 'Prostituta', 'Orgia', ''];
        foreach ($forbiddenWords as $word)
        {
            if(strpos($text, $word)){
                return true;
            }
        }
        return false;
    }
}