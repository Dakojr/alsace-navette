<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin()
    {
        
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin/trajet", name="adminTrajet")
     */
    public function adminTrajet()
    {
        $repositoryTrajet = $this->getDoctrine()->getRepository(Trajet::class);
        $trajets = $repositoryTrajet->findAll();
        return $this->render('admin/trajet.html.twig', [
            'trajets' => $trajets,
        ]);
    }
    /**
     * @Route("/admin/delete/{id}", name="adminDelete")
     */
    public function delete(Response $response, $id){
        $em = $this->getDoctrine()->getManager();
        $repositoryTrajet = $this->getDoctrine()->getRepository(Trajet::class);
        $repositoryReservation = $this->getDoctrine()->getRepository(Reservation::class);

        $reservation = $repositoryReservation->findBy(array('id' => $id));
        $em->remove($reservation);
        $em->flush();

        $response = new Response();
        $response->send();
    }

    /**
     * @Route("/admin/trajetEdit/{reservation}", name="adminTrajetEdit")
     */
    public function edit(Request $request, Reservation $reservation){
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();
            return $this->redirectToRoute('admin/trajet.html.twig');
        }
        return $this->render('admin/trajetEdit.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
