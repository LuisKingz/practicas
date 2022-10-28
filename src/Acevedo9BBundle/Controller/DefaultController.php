<?php

namespace Acevedo9BBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Acevedo9BBundle:Default:index.html.twig');
    }
}
