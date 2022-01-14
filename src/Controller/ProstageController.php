<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;

class ProstageController extends AbstractController
{
    /**
     * @Route("/", name="prostage_accueil")
     */
    public function index(): Response
    {
        //Récuper le Repository de l'entité stage
        $repositoryStages = $this->getDoctrine()->getRepository(Stage::class);


        //Récuperer les stages en BD
        $stages = $repositoryStages->findAll();


        //Envoyer les stages récuperés à la vue

        return $this->render('prostage/index.html.twig', [
            'stages'=>$stages
        ]);
    }

        /**
     * @Route("/entreprises", name="entreprises")
     */
    public function entreprises(): Response
    {

        $repositoryEntreprises = $this->getDoctrine()->getRepository(Entreprise::class);

        $entreprises = $repositoryEntreprises->findAll();


             return $this->render('prostage/entreprises.html.twig', [
            'entreprises'=>$entreprises,
        ]);
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function formations(): Response
    {
       $repositoryFormations = $this->getDoctrine()->getRepository(Formation::class);

       $formations = $repositoryFormations->findAll();

        return $this->render('prostage/formations.html.twig', [
            'formations'=>$formations,
        ]);
    }

    /**
     * @Route("/stages/{id}", name="stages-id")
     */
    public function stage($id): Response
    {
        //Récuper le Repository de l'entité stage
        $repositoryStages = $this->getDoctrine()->getRepository(Stage::class);

        //Récuperer le stage enfonction de l'id
        $stage=$repositoryStages->find($id);

        //Envoyer le stage récuperé à la vue
        return $this->render('prostage/stages-id.html.twig', [
            'controller_name' => 'ProstageController', 'stage'=>$stage
        ]);
    }
    
}
