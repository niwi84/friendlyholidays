<?php

namespace HolidaysBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HolidaysBundle:Default:index.html.twig');
    }
}
