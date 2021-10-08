<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Recettes;
use App\Entity\Categories;
use App\Entity\Niveaux;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use \EasyCorp\Bundle\EasyAdminBundle\Config\Menu\SectionMenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashbord.html.twig');
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cuisinedecatherine');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section();
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user-cog', User::class);
        yield MenuItem::section();
        yield MenuItem::linkToCrud('Recettes', 'fas fa-edit', Recettes::class);
        yield MenuItem::linkToCrud('Catégories', 'fas  fa-layer-group', Categories::class);
        yield MenuItem::linkToCrud('Niveaux', 'fas  fa-smile-beam', Niveaux::class);
    }
}
