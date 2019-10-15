<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(UsersRepository $usersRepository)
    {
        return $this->render('site/home.html.twig', [
            'users' => $usersRepository->findAll(),
        ]);
    }
}
