<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function number()
    {
        $number = random_int(1900, 2000);

        return $this->render('lucky/index.html.twig', array(
            'number'=> $number,
            'letters' => array()
            ));
    }
    
}