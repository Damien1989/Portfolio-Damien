<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    /**
     * @Route("/competences", name="skill")
     */
    public function index(): Response
    {
        return $this->render('skills/index.html.twig', [
        ]);
    }
}
