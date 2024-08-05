<?php

namespace ASH\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendrierController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASHAppBundle:Calendrier:index.html.twig');
    }
}
