<?php

namespace ASH\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EquipesController extends Controller
{
    public function indexAction()
    {
        return $this->render('ASHAppBundle:Equipes:index.html.twig');
    }
}
