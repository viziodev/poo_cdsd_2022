<?php 
namespace App\Core;

use App\Exceptions\BdConnexionException;


class DataBase{
    private \PDO|null $pdo=null;//Pas de connexion
    //Mode Deconnecte
    public function openConnexion(){
        //host : adresse du server BD
        try {
            //Essaie de te connecter
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire_l2s;host=localhost:8889","root","root");
        } catch (\Exception $ex) {
            die("Erreur Connexion -Veuillez contacter votre Admin");
              //throw new BdConnexionException;
        }
       
      
    }

    public function closeConnexion(){
         $this->pdo=null;
    }

    public function executeSelect(){
        
    }

    public function executeUpdate(){
        
    }
}