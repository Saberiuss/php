<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomerController extends AbstractController
{
    /**
     * @Route("/welcomer/{name}/{lastname}", defaults={"name"="vasya", "lastname"="pupkin"}, name="welcomer")
     */
    public function index(string $name, string $lastname)
    {
        return $this->render('welcomer/index.html.twig', [
            'name' => $name,
            'lastname' => $lastname,
        ]);
    }



}
