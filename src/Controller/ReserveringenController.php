<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReserveringenController extends AbstractController
{
    /**
     * @Route("/reserveringen", name="reserveringen")
     */
    public function index()
    {
        return $this->render('reserveringen/index.html.twig', [
            'controller_name' => 'ReserveringenController',
        ]);
    }
}
