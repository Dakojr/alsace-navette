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
<<<<<<< HEAD

    /**
     * @Route("/infoDestination", name="infoDestination")
     */
    public function infoDestination()
    {
        return $this->json(['username' => 'amine']);
    }

=======
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
        $horraire_depart = $req->get('horraires_depart_aller');
        $adresse = $req->get('adresse');
        $pdp = $req->get('pdp_aller');
        $cp = $req->get('cp_aller');
        $pays = $req->get('pays_aller');

        
        $depart_destination->setDepart($depart);
        $depart_destination->setDestination($destination);
        
        $reservation->setNbPassager($nb);
        $reservation->setDateDepart($date_depart);
        $reservation->setHorraire($horraire_depart);
        $reservation->setPointDePrise($pdp);
        $reservation->setUser($this->getUser());
        $reservation->setDepartDestination($depart_destination);
        
        $em->persist($depart_destination);
        $em->persist($reservation);
        $em->flush();

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
        $date_depart = $req->get('date_depart');
        
        $nb_passager_aller = $req->get('nb_passager_1');
        $nb_passager_retour = $req->get('nb_passager_2');
        $pdp = $req->get('pdp');
        
        $date_depart = $req->get('date_depart');
        $date_retour = $req->get('date_retour');
        
        $horraire_depart = $req->get('horaire_depart');
        $horraire_retour = $req->get('horaire_retour');
        $adresse = $req->get('adresse');
        $cp = $req->get('cp');
        $ville = $req->get('ville');
        $pays = $req->get('pays');

        for ($i = 0; $i < 2; $i++){
            if (!isset($tmp)){
                $depart_destination->setDepart($depart);
                $depart_destination->setDestination($destination);

                $reservation->setNbPassager($nb_passager_aller);
                $reservation->setDateDepart($date_depart);
                $reservation->setHorraire($horraire_depart);
                $reservation->setUser($this->getUser());
                $reservation->setDepartDestination($depart_destination);

                $em->persist($depart_destination);
                $em->persist($reservation);
                $em->flush();

                $tmp = "ok";
            }
            else {
                $depart_destination->setDepart($destination);
                $depart_destination->setDestination($depart);
                
                $reservation->setNbPassager($nb_passager_retour);
                $reservation->setDateDepart($date_retour);
                $reservation->setHorraire($horraire_retour);
                $reservation->setUser($this->getUser());
                $reservation->setDepartDestination($depart_destination);

                $em->persist($depart_destination);
                $em->persist($reservation);
                $em->flush();
            }

        }

        
        return new Response($response);
    }
>>>>>>> amine/master
}
