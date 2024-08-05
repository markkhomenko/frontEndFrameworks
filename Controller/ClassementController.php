<?php

namespace ASH\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASHAppBundle:Classement:index.html.twig');
    }
}
