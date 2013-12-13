<?php
namespace Bimotor\MainBundle\Service\Helper;


use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityHelper
{
    protected $em;
    protected $userManager;
    protected $securityContext;

    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function setUserManager($userManager)
    {
        $this->userManager = $userManager;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

    public function handleLogin($loggingUser)
    {
        $dbUser = $this->em->getRepository('BimotorMainBundle:User')->findOneByUsername($loggingUser->username);
        if ($dbUser && $this->userManager->correctPassword($dbUser, $loggingUser->password)) {
            $this->loginInSf($dbUser);
            return $dbUser->getUsername();
        }

        return false;
    }

    public function loginInSf($loggingUser)
    {
        $token = new UsernamePasswordToken($loggingUser->getUsername(), $loggingUser->getPassword(), 'main', $loggingUser->getRoles());
        $this->securityContext->setToken($token);
        var_dump($this->securityContext->getToken()->getUser());
        die;
    }
}