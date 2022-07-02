<?php

require "/var/www/html/PerJobs/Autoload.php";

use PerJobs\src\Back\Service\Posts\NewPostEmployer;

$aux =1;

if(isset($_POST['description']) && isset($_POST['title']) && $_POST['description'] != '' && $_POST['title'] != ''){
    $description = $_POST['description'];
    $title = $_POST['title'];
    switch ($aux) {
        case 1:
            $post = new NewPostEmployer($description, $title,['aaa','aaa'], 12,1);

            $arrayAux = $post->statusVerificator();
            
            if (is_array($arrayAux)) {
                foreach ($arrayAux as $key => $value) {
                    echo "<p> $value </p>";
                }
            }else{
                echo "$arrayAux";
            }
            
            break;
        case 0:
            # code...
            break;
        default:
            # code...
            break;
    }
}