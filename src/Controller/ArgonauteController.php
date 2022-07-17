<?php

namespace App\Controller;

use App\Entity\Argonauteadd;
use App\Form\ArgonauteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArgonauteController extends AbstractController
{
    //Création d'une fonction pour créer un nom d'argonaute en BDD.
    //Classe EntityManagerInterface pour l'enregistrement des données sur ma BDD.
    /**
     * @Route ("/argonaute/create", name="argonaute_name")
     */
    public function argonauteCreate(Request $request, EntityManagerInterface $entityManager)
    {
        //J'instancie la classe argonaute en y intégrant les méthodes
        //pour la création d'un nom dans ma BDD Argonauteadd.
        $argonaute = new Argonauteadd();
        $argonauteForm = $this->createForm(ArgonauteType::class, $argonaute);
        $argonauteForm->handleRequest($request);

        if ($argonauteForm->isSubmitted() && $argonauteForm->isValid()) {
            // Je prépare les données avec la méthode Persist
            //J'envoie à ma BDD grâce à la méthode Flush
            $entityManager->persist($argonaute);
            $entityManager->flush();
        }
        //J'appelle la méthode render pour un retour sur mon navigateur
        return $this->render('index.html.twig', [
            'argonauteForm' => $argonauteForm->createView()
        ]);
    }

}