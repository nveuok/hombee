<?php
namespace Bimotor\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('BimotorMainBundle:Main:index.html.twig');
    }
}