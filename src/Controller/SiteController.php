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


    /**
     * @Route("/{x}/{y}", name="home1")
     */
    public function home1(string $x, string $y)
    {
        return $this->render('site/home1.html.twig', [
            'x' => $x,
            'y' => $y,
        ]);
    }
}
