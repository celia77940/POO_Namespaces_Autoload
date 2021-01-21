<?php

use App\Autoloader;
use App\Client\Compte as Compteclient;
use App\Banque\{CompteCourant, CompteEpargne};

require_once 'classe/Autoloader.php';
Autoloader::register();

//On instance le compte 
 $compte1 = new CompteCourant('Benoit', 500, 200);
// $compte2 = new CompteClient();

// $compte1 ->setTitulaire('Robert');
// $compte1 ->retirer(200);

echo '<pre>';
var_dump($compte1);
// echo '<pre>';

// $compteEpargne = new CompteEpargne('Benoit', 200, 10);

// var_dump($compteEpargne);
// echo '<pre>';

// $compteEpargne->verserInterets();
// $compteEpargne->retirer(300);

// var_dump($compteEpargne);
// echo '<pre>';


// $client = new Compteclient;

// var_dump($client) ;
// echo '<pre>';

