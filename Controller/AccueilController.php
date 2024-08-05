<?php

namespace ASH\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASHAppBundle:Accueil:index.html.twig');
    }
}
