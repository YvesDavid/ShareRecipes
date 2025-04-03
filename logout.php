<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');

// Supprimer toutes les variables de session
session_unset();
// Détruire la session , c'est deux fonctions sont à mettre généralement ensemble
session_destroy();

// Rediriger vers page index
redirectToUrl('index.php');

?>