<?php

namespace App\Controller;

use App\Entity\Recettes;
use App\Entity\Categories;
use App\Entity\Niveaux;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findBy(array(),array('id'=>'DESC'),5,0);

        $repo = $this->getDoctrine()->getRepository(Categories::class);
        $categories = $repo->findAll();


        return $this->render('main/index.html.twig',[
            'recettes'=>$recettes,
            'categories'=>$categories,
        ]);
    }

    /**
     * @Route("/cocktails", name="cocktails")
     */
    public function cocktails(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findAll();

        $repo = $this->getDoctrine()->getRepository(Categories::class);
        $categories = $repo->findAll();

        $repo = $this->getDoctrine()->getRepository(Niveaux::class);
        $niveaux = $repo->findAll();

        return $this->render('main/cocktails.html.twig',[
            'recettes'=>$recettes,
            'categories'=>$categories,
            'niveaux'=>$niveaux,
        ]);
    }

    /**
     * @Route("/crepes", name="crepes")
     */
    public function crepes(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findAll();

        $repo = $this->getDoctrine()->getRepository(Categories::class);
        $categories = $repo->findAll();

        return $this->render('main/crepes.html.twig',[
            'recettes'=>$recettes,
            'categories'=>$categories,
        ]);
    }
     /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('security/login.html.twig');
    }
}
