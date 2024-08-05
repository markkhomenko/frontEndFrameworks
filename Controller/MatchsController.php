<?php

namespace ASH\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MatchsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASHAppBundle:Matchs:index.html.twig');
    }
}
