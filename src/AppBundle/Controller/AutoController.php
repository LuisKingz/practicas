<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AutoController extends Controller {
    
    
     public function autoAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $autoList = $em->getRepository('Acevedo9BBundle:Automovil')->findAll();

        $auto = new \Acevedo9BBundle\Entity\Automovil();
        $autoForm = $this->createForm(\Acevedo9BBundle\Form\AutomovilType::class, $auto);
        $autoForm->handleRequest($request);

        if ($autoForm->isSubmitted() && $autoForm->isValid()) {
            $auto->setEstado(1);
            $em->persist($auto);
            $em->flush();

            $this->addFlash('success', 'Si jaló');
            return $this->redirectToRoute('app_autos');
        }
         return $this->render('AppBundle:Default:auto.html.twig', array(
                    'autoList' => $autoList,
                    'autoForm' => $autoForm->createView()
        ));
    }
    
}