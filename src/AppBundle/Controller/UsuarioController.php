<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends Controller {
    
    
     public function usuariosAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $usuarioList = $em->getRepository('Acevedo9BBundle:Usuario')->findAll();

        $usuario = new \Acevedo9BBundle\Entity\Usuario();
        $usuarioForm = $this->createForm(\Acevedo9BBundle\Form\UsuarioType::class, $usuario);
        $usuarioForm->handleRequest($request);

        if ($usuarioForm->isSubmitted() && $usuarioForm->isValid()) {
            $usuario->setEstado(1);
            $em->persist($usuario);
            $em->flush();

            $this->addFlash('success', 'Si jaló');
            return $this->redirectToRoute('app_usuarios');
        }
         return $this->render('AppBundle:Default:usuario.html.twig', array(
                    'usuarioList' => $usuarioList,
                    'usuarioForm' => $usuarioForm->createView()
        ));
    }
    
}