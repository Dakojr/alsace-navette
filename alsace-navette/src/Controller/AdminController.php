<?php

namespace App\Controller;

use App\Entity\Trajet;
use App\Entity\Reservation;
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
     * @Route("/admin/trajetEdit/{id}", name="adminTrajetEdit")
     */
    public function edit($id){
        $em = $this->getDoctrine()->getManager();
        $repositoryReservation = $this->getDoctrine()->getRepository(Reservation::class);

        $reservation = $repositoryReservation->findBy(array('id' => $id));
        
        $form = $this->createFormBuilder($reservation)
            ->add('user', EntityType::class, [
                'class' => 'App\Entity\User',
                'placeholder' => 'choisissez un nouvel utilisateur',
                'mapped' => 'false'
            ])
            ->add('dateDepart', DateType::class)
            ->add('horraire')
            ->add('pointDePrise', TextType::class, ['label' => 'Point de prise'])
            ->add('commentaire', TextType::class, ['label' => 'Commentaire'])
            ->getForm();

        return $this->render('admin/trajetEdit.html.twig', [
            'id' => $id,
            'form' => $form
        ]);
    }
}
