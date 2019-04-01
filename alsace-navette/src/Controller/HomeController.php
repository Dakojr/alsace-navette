<?php

namespace App\Controller;



use App\Entity\Reservation;
use App\Entity\DepartDestination;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
     * @Route("/reservationAller", name="reservationAller")
     */
    public function reservationAller(Request $req) : Response {
        $em = $this->getDoctrine()->getManager();

        $depart_destination = new DepartDestination();
        $reservation = new Reservation();

        $depart = $req->get('depart_aller');
        $destination = $req->get('destination_aller');
        $nb = $req->get('nb_passager_aller');
        $date_depart = $req->get('date_depart_aller');
        $horraire_depart = $req->get('horraire_depart_aller');
        
        
        $reservation->setNbPassager($nb);
        $reservation->setDateDepart($date_depart);
        $reservation->setHorraire($horraire_depart);

        $depart_destination->setDepart($depart);
        $depart_destination->setDestination($destination);

    }
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(Request $req) : Response{
        $em = $this->getDoctrine()->getManager();
        $depart_destination = new DepartDestination();
        $reservation = new Reservation();

        $depart = $req->get('depart');
        $destination = $req->get('destination');
        $nb = $req->get('nb_passager');
        $date_depart = $req->get('date_depart');
        $nb_passager_aller = $req->get('nb_passager_1');
        $nb_passager_retour = $req->get('nb_passager_2');
        $date_depart = $req->get('date_depart');
        $date_retour = $req->get('date_retour');
        $horraire_depart = $req->get('horraire_depart');
        $horraire_retour = $req->get('horraire_retour');
        $reservation->setNbPassager($nb);

        $depart_destination->setDepart($depart);
        $depart_destination->setDestination($destination);

        return new Response($response);
    }
}
