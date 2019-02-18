<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;
use App\Entity\Loisir;
use App\Entity\Experience;

class DefaultController extends AbstractController
{
    public function index()
    {
        $number = random_int(0, 100);
        
$formations = $this->getDoctrine()->getRepository(Formation::class)->findAll();
$forms1 = $this->getDoctrine()->getRepository(Loisir::class)->findAll();
$forms2 = $this->getDoctrine()->getRepository(Experience::class)->findAll();

        return $this->render('lucky/index.html.twig', array(
            'number' => $number,
            'name' => 'Paulo',
            'formations' => $formations,
            'loisirs' => $forms1,
            'experiences' => $forms2,
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
        return $this->redirectToRoute('index');
    }
    
}