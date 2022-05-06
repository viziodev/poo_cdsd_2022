<?php 
// Une variable d'une classe
//Manipuler un Objet=>
//1-charger le fichier qui contient la classe
require_once("../models/User.php");
//2-Instancier l'objet
$user=new User();// fonction qui s'appelle le constructeur => __construct()
//Donner un etat a l'objet=> donnez une valeur a ses attributs
//-> Operateur de portee d'instance
//$user-> : interface de la classe(Ensemble des methodes ou attributs publics )
$user->setId(1);


