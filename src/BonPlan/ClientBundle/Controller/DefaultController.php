<?php

namespace BonPlan\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BonPlanClientBundle:Default:index.html.twig');
    }
}
