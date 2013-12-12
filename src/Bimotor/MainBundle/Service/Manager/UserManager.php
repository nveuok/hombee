<?php

namespace Bimotor\MainBundle\Service\Manager;

use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\User\UserInterface;
use Bimotor\MainBundle\Entity\User;

class UserManager
{
    private $encoderFactory;
    private $em;

    public function __construct(EncoderFactory $encoderFactory, $em)
    {
        $this->encoderFactory = $encoderFactory;
        $this->em = $em;
    }

    public function getEncoder($user)
    {
        return $this->encoderFactory->getEncoder($user);
    }

    /**
     * Updates a user password if a plain password is set.
     *
     * @param UserInterface $user
     *
     * @return void
     */
    public function updatePassword(User $user)
    {
        if (0 !== strlen($password = $user->getPlainPassword())) {
            $encoder = $this->encoderFactory->getEncoder($user);
            $newPass = $encoder->encodePassword($password, $user->getSalt());
            $user->setPassword($newPass);
            $user->setPlainPassword(null);
        }
    }

    /**
     * Generate a new salt for the user
     *
     * @param User $user
     * @return string
     */
    public function resetSalt(User $user)
    {
        $salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        $user->setSalt($salt);

        return $salt;
    }

    /**
     * Generate a new plain password
     *
     * @param User $user
     * @return string
     */
    public function resetPassword(User $user)
    {
        $token = substr(sha1(time() . $user->getEmail()), 0, 8);
        $user->setPlainPassword($token);
        $user->setPasswordResetAt(new \DateTime('now'));

        return $token;
    }

    public function loadUserById($id)
    {
        return $this->em->getRepository('CrfMainBundle:User')->findOneBy(array('id' => $id));
    }

    public function loadUser($email)
    {
        return $this->em->getRepository('CrfMainBundle:User')->findOneByEmail($email);
    }

    public function correctPassword(User $user, $loginPass)
    {
        $encoder = $this->encoderFactory->getEncoder($user);
        return ($encoder->encodePassword($loginPass, $user->getSalt()) == $user->getPassword());
    }

}

