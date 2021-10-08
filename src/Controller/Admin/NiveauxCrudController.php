<?php

namespace App\Controller\Admin;

use App\Entity\Niveaux;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NiveauxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Niveaux::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('niveau'),
            
        ];
    }
    
}
