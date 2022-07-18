<?php

namespace App\Model\DBConnector;

use \PDO;

class DBConnector {  

    private $host;
    private $db; 
    private $username;
    private $password;
    private $con;
    private static $instance;

    // function de connexion //
    private function connect() {  
            $this->host = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->db = 'test_bko';
            try { 
                 $con = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';charset=utf8', $this->username, $this->password);
               
                 $this->con = $con;     
                 $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                 $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            
            } catch(PDOException $e){
                die("<p>Erreur: ".$e->getMessage()."</p>");
            }       
    }
    // static méthode connexion //
    public static function getInstance(){
        if(static::$instance === NULL){
            static::$instance = new DBConnector();
            static::$instance->connect();
        } 
        return static::$instance;        
    }
    // Methode de préparation d'une Query sur la BDD //
    public function pQuery($query) {
        return $this->con->prepare($query);
    }
}  

?>

