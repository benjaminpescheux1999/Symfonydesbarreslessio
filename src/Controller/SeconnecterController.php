<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SeconnecterController extends AbstractController
{
    /**
     * @Route("/seconnecter", name="seconnecter")
     */
    public function index()
    {
        return $this->render('seconnecter/index.html.twig', [
            'controller_name' => 'SeconnecterController',
        ]);
    }
}
