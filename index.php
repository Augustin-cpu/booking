<?php


/**
 * Importation du fichier de configuration de l'application
 * Définit les constantes de chemin, d'URL et autres paramètres globaux
 */
require_once('lib/config.php');

/**
 * Importation de la classe MyAutoload pour gérer le chargement automatique des classes.
 */

require_once(CLASSES.'MyAutoload.php');

// Enregistrement de la méthode d'autoload
MyAutoload::register();

if(isset($_GET['r'])){
    $request = $_GET['r'];
}
$router = new Routeur($request);
$router->renderController();