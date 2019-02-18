<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;
use App\Form\FormationType;

class FormationController extends AbstractController
{
    public function create()
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        
        return $this->render('Formation/create.html.twig', [
            'entity' => $formation,
            'form' => $form->createView(),
            ]
        );
    }
    

    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $formation = $entityManager->getRepository(Formation::class)->findOneBy(['id' => $id]);
        $form = $this->createForm(FormationType::class, $formation);
       
        return $this->render('Formation/create.html.twig', [
            'entity' => $formation,
            'form' => $form->createView(),
            ]
        );
    }
    
    
     public function valid(Request $request)
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $formation = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formation);
            $entityManager->flush();
            
            return $this->redirectToRoute('index');
        }
        
        return $this->render('Formation/create.html.twig', [
            'entity' => $formation,
            'form' => $form->createView(),
            ]
        );
    }
    
   /**
     * @Route("/{id}", name="formation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Formation $formation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($formation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('index');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}