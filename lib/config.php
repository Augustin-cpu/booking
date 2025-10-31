
<?php

/**
 * Fichier de configuration principal de l'application
 * Définit les constantes de chemin pour faciliter l'inclusion des fichiers
 * et la gestion des ressources dans le projet.
 */

// Chemin racine du projet
define('ROOT_PATH', dirname(dirname(__FILE__)));

// Chemin vers le dossier des classes
define('CLASSES', ROOT_PATH.'/classes/');

// Chemin vers le dossier des contrôleurs
define('CONTROLLERS',ROOT_PATH.'/controllers/');

// Chemin vers le dossier des modèles
define('MODEL',ROOT_PATH.'/model/');

// Chemin vers le dossier des vues
define('VIEW',ROOT_PATH.'/view/');

define('LAYOUT',VIEW.'layout/');