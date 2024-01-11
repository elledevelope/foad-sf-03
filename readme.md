# FOAD Symfony

## Projet

Réaliser un site web qui liste des formations.

Une formation doit contenir :
- titre
- résumé
- texte explicatif de la formation
- durée en jour/mois
- niveau : débutant,intermediaire,expert
- lieu : présentiel,distanciel

Le site web consiste est une page qui liste les dernieres formations classé par durée de la formation , de la plus courte à la plus longue.

Réaliser ce site web avec une installation compléte de **Symfony**.

## Git

- Votre travail final se fera dans une branche nommée **developp**
- Vous devrez faire des commits fréquents (**atomiques**) 
- Travailler dans des branches , une branche par fonctionnalité

## Design

Utiliser le framework css **bosstrap** pour effectu afficher les formations sous formes de **cards**.

Bon travail.


---
<!-- `composer require orm-fixtures --dev` -->
`composer require --dev doctrine/doctrine-fixtures-bundle` DoctrineFixturesBundle is a bundle for Symfony that provides tools for loading sample or test data into your database during development or testing.
`composer require --dev fakerphp/faker`
`php bin/console make:fixtures AppFixrures`
`symfony console doctrine:fixture:load` command used to load data fixtures into your database. This command is part of the DoctrineFixturesBundle, which is a bundle for Symfony that provides tools for loading sample or test data into your database during development or testing.

`symfony console`

