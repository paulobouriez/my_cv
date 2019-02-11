<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;

class DefaultController extends AbstractController
{
    public function index()
    {
        $number = random_int(0, 100);
        
$forms = $this->getDoctrine()->getRepository(Formation::class)->findAll();

        return $this->render('lucky/index.html.twig', array(
            'number' => $number,
            'name' => 'Paulo',
            'formations' => $forms,
            ));
    }
    
public function Formation()
    {
        $form = new Formation();
        
        $form->setName('');
        $form->setDateStart(new \DateTime());
        $form->setDateEnd(new \DateTime());
        $form->setPlace('');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return $this->redirectToRoute('index');
    }
    
}