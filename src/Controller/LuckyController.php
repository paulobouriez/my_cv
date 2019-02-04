<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Formation;

class LuckyController extends Controller
{
    public function number()
    {
        $number = random_int(1900, 2000);

$forms = $this->getDoctrine()->getRepository(Formation::class)->findAll();


        return $this->render('lucky/index.html.twig', array(
            'number'=> $number,
            'letters' => array(),
            'formations' => $forms
            ));
    }
    
    public function Formation()
    {
        $form = new Formation();
        
        $form->setName('MMI');
        $form->setDateStart(new \DateTime());
        $form->setDateEnd(new \DateTime());
        $form->setPlace('Grenoble');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return $this->redirectToRoute('app_lucky_number');
    }
}