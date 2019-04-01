<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homeRoute()
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/aeroport", name="aeroport")
     */
    public function aeroportRoute()
    {
        return $this->render('aeroport/aeroport.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/horairesTarifs", name="horairesTarifs")
     */
    public function aeroportRouteHorairesTarifs()
    {
        return $this->render('aeroport/horairesTarifs.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/infoDestination", name="infoDestination")
     */
    public function infoDestination()
    {
        return $this->json(['username' => 'amine']);
    }

}
