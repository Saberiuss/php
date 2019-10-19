<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// 127.0.0.1:8000/10/10
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
     * @Route("/{x}/{y}", requirements={"x": "\d+", "y": "\d+"}, name="home1")
     */
    public function home1(string $x, string $y)
    {
        return $this->render('site/home1.html.twig', [
            'x' => $x.'asd',
            'y' => $y,
        ]);
    }

    /**
     * @Route("/param2/значение параметра1/значение параметра2", name="home2")
     */
    public function home2(string $par1, string $par2)
    {
        return $this->render('params/home2.html.twig', [
            'par1' => $par1,
            'par2' => $par2,
        ]);
    }

    /**
     * @Route("/{a}/{b}/5215641651hello", name="home3")
     */
    public function home3(string $a, string $b)
    {
        return $this->render('params/home3.html.twig', [
            'b' => $a,
            'a' => $b,
        ]);
    }
 /**
     * @Route("/2/{pre}/{pear}", name="home4")
     */
    public function home4(string $pre, string $pear)
    {
        return $this->render('params/home4.html.twig', [
            'pre' => $pre,
            'pear' => $pear,
        ]);
    }
    /**
     * @Route("/3/{krya}/{kre}", name="home5")
     */
    public function home5(string $krya, string $kre)
    {
        return $this->render('params/home5.html.twig', [
            'krya' => $krya,
            'kre' => $kre,
        ]);
    }

    /**
     * @Route("/asd/{per}/{sona}", name="home6")
     */
    public function home6(string $per, string $sona)
    {
        return $this->render('params/home6.html.twig', [
            'per' => $per,
            'sona' => $sona,
        ]);
    }

    /**
     * @Route("/{om}/{sk}", name="home7")
     */
    public function home7(string $om, string $sk)
    {
        return $this->render('params/home7.html.twig', [
            'om' => $om,
            'sk' => $sk,
        ]);
    }



    /**
     * @Route("/{par}/{tition}", name="home8")
     */
    public function home8(string $par, string $tition)
    {
        return $this->render('params/home8.html.twig', [
            'par' => $par,
            'tition' => $tition,
        ]);
    }


    /**
     * @Route("/{wel}/{come}", name="home9")
     */
    public function home9(string $wel, string $come)
    {
        return $this->render('params/home9.html.twig', [
            'wel' => $wel,
            'come' => $come,
        ]);
    }

    /**
     * @Route("/{rail}/{way}", name="home10")
     */
    public function home10(string $rail, string $way)
    {
        return $this->render('params/home10.html.twig', [
            'rail' => $rail,
            'way' => $way,
        ]);
    }

    /**
     * @Route("/{mortal}/{kombat}", name="home11")
     */
    public function home11(string $mortal, int $kombat)
    {
        return $this->render('params/home11.html.twig', [
            'mortal1' => $mortal,
            'kombat1' => $kombat,
        ]);
    }
}
