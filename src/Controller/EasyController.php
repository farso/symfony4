<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EasyController extends AbstractController
{
    /**
     * @Route("/easy", name="easy")
     */
    public function index()
    {
        return $this->render('easy/index.html.twig', [
            'controller_name' => 'EasyController',
        ]);
    }
}
