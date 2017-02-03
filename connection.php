<?php

ini_set('display_errors','on');
    error_reporting(E_ALL);
    //pour faire les verifications d'erreurs PHP

    $bdd = new PDO('mysql:host=localhost;dbname=Datacorp','root', 'simplon11' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

abstract class Connection
{ // classe abstraite pour relier le projet à la base de données correspondante
    public static function dbConnect()
    {
        return new PDO("mysql:host=localhost; dbname=Datacorp",   "root",   "simplon11");
        // a modifier en fonction du serveur  nom base de donnée, nom admin, mot de passe
    }
}
