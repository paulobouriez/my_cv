<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Formation;
use App\Entity\Loisir;
use App\Entity\Experience;

class LuckyController extends Controller
{
    public function number()
    {
        $number = random_int(1900, 2000);

$forms = $this->getDoctrine()->getRepository(Formation::class)->findAll();


        return $this->render('lucky/index.html.twig', array(
            'number'=> $number,
            'letters' => array(),
            'formations' => $forms,
            'experiences' =>$forms ,
            'loisirs' => $forms,
            ));
    }
    
    public function Formation()
    {
        $form = new Formation();
        
        $form->setName('');
        $form->setDateStart('');
        $form->setDateEnd('');
        $form->setPlace('');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return $this->redirectToRoute('app_lucky_number');
    }
    
     public function Experience()
    {
        $form1 = new Experience();
        
        $form1->setName('');
        $form1->setDateStart('');
        $form1->setDateEnd('');
        $form1->setPlace('');
        $form1->setText('');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form1);
        $eManager->flush();
        return $this->redirectToRoute('app_lucky_number');
    }
    
     public function Loisir()
    {
        $form2 = new Loisir();
        
        $form2->setName('');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form2);
        $eManager->flush();
        return $this->redirectToRoute('app_lucky_number');
    }
}