<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlaguesController extends AbstractController
{
    /**
     * @Route("/blagues", name="blagues")
     */
    public function index()
    {
        return $this->render('blagues/index.html.twig', [
            'controller_name' => 'BlaguesController',
        ]);
    }
}
