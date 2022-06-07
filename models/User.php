<?php 

 namespace App\Models;
 use App\Core\Model;
 
class User extends Model{
    //Attributs 
     protected int   $id;
     protected string $login;
     protected string $password;
     protected static string $role;

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
    public function setId($id ):void{
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
     public static  function getRole()
     {
          return self::$role;
     }

     
     public static function setRole($role)
     {
          self::$role = $role;  
     }

     public function insert(){
          //die(parent::$table);
          $sql="INSERT INTO  ".parent::table()."  (`login`, `password`,  `roles`)
               VALUES ( ?, ?, ?);";
         return parent::database()->executeUpdate($sql,[
                                                  $this->login,$this->password,self::$role]);
     }

     public  function selectUserByLoginAndPassword(){
           $sql="select * from user where login=? and password=?";
           return parent::database()->executeSelect($sql,
                                      [$this->login,$this->password],
                                       true) ;
     }



     
}