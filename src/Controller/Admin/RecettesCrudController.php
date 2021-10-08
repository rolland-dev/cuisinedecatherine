<?php

namespace App\Controller\Admin;

use App\Entity\Recettes;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RecettesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Recettes::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            AssociationField::new('categories'),
            AssociationField::new('niveaux'),
            TextareaField::new('ingredients'),
            TextareaField::new('description'),
            TextareaField::new('divers'),
        ];
    }
    
}
