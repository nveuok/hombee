<?php
namespace Bimotor\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $users = $this->getDoctrine()->getManager()->getRepository('BimotorMainBundle:User')->findAll();
        $html = $this->renderView('BimotorMainBundle:Security:login.html.twig', array(
            'users' => $users
        ));
        return new Response($html);
    }

    public function getUserListAction()
    {
        $users = $this->getDoctrine()->getManager()->getRepository('BimotorMainBundle:User')->getUsers();
        return new Response(json_encode(array()));
    }

    public function loginCheckAction(Request $request)
    {
        $params = array();
        $html = null;
        if ($request->getMethod() == 'POST') {
            $loggingUser = json_decode($request->getContent());
            if (is_object($loggingUser) && property_exists($loggingUser, 'username') && property_exists($loggingUser, 'password')) {
                $params['status'] = ($login = $this->get('security_helper')->handleLogin($loggingUser)) ? $login : '401';
            }
        } elseif ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY') && $this->getUser()) {
            $params['status'] = $this->getUser()->getUsername();
        } else {
            $params['status'] = '401';
            $params['html'] = $this->renderView('BimotorMainBundle:Security:login.html.twig',
                array('users' => $this->getDoctrine()->getManager()->getRepository('BimotorMainBundle:User')->getUsers())
            );
        }
        return new Response(json_encode($params));
    }

    public function clientCRUDAction()
    {
        if (!$this->getUser()) {
            return new Response(json_encode(array('status' => '401')));
        }
        return new Response(json_encode(array('html' => $this->renderView('BimotorMainBundle:Client:clientCRUD.html.twig'))));
    }
}