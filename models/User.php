<?php 
class User{
    //Attributs 
     private int   $id;
     private string $login;
     private string $password;
     private string $role;

    //Methodes
    //Constructeur
    public function __construct()
    {
        
    }
    //Getters => Obtenir la valeur d'un attribut private ou protected
                //a partir de l'interface de la classe
    public function getId():int{
       return $this->id;
    }

    //Setters=> Modifie la valeur d'un attribut private ou protected
                //a partir de l'interface de la classe
    public function setId(int $id ):void{
               $this->id=$id;   
    }
    

     /**
      * Get the value of login
      */ 
     public function getLogin()
     {
          return $this->login;
     }

     /**
      * Set the value of login
      *
      * @return  self
      */ 
     public function setLogin($login)
     {
          $this->login = $login;

          return $this;
     }

     /**
      * Get the value of password
      */ 
     public function getPassword()
     {
          return $this->password;
     }

     /**
      * Set the value of password
      *
      * @return  self
      */ 
     public function setPassword($password)
     {
          $this->password = $password;

          return $this;
     }

     /**
      * Get the value of role
      */ 
     public function getRole()
     {
          return $this->role;
     }

     /**
      * Set the value of role
      *
      * @return  self
      */ 
     public function setRole($role)
     {
          $this->role = $role;

          return $this;
     }
}