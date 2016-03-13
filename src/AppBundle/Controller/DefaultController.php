<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', [
            'manage' => false
        ]);
    }

    /**
     * Simple stub
     */
    protected function __createUserHelper()
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $userAdmin = $userManager->/*findUserByUsername('uzytkownik2'); //*/createUser();

        $userAdmin->setUsername('uzytkownik2');
        $userAdmin->setEmail('uzytkownik2@example.com');
        $userAdmin->setPlainPassword('uzytkownik2');
        $userAdmin->setEnabled(true);
        $userAdmin->addRole('ROLE_ADMIN');

        $userManager->updateUser($userAdmin, true);
    }
}
