<?php

namespace App\Controller;

use App\Entity\Trajet;
use Symfony\Component\Routing\Annotation\Route;
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
}
