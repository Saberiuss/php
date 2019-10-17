<?php

namespace App\Controller;

use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JobsController extends AbstractController
{

    /**
     * @Route("/jobs", name="jobs")
     */
    public function index(JobsRepository $jobsRepository)
    {
        return $this->render('jobs/index.html.twig', [
            'controller_name' => 'JobsController',
            'jobs' => $jobsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/jobs/{jobs}", name="job", methods={"GET"})
     */
    public function jobSite(JobsRepository $jobsRepository, string $jobs)
    {
        return $this->render('jobs/jindex.html.twig', [
        'jobsName' => $jobs,
         'jobs1' => $jobsRepository->findAll(),

        ]);
    }



}
