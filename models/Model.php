<?php
    Abstract class Model{
        
<<<<<<< HEAD
        private $db_name = "cogip";
=======
        private $db_name = "COGIP";
>>>>>>> Master
        private $db_user = "root";
        private $db_pass =  "";
        private $db_host = "localhost";

        public $id;
        public $table;
        
        
        protected $_bdd;

        public function dbConnect(){
<<<<<<< HEAD
             $this->_bdd = NULL;
            
                try{
                    $this->_bdd = new PDO('mysql:host='.$this->db_host.':3307;dbname=cogip',$this->db_user,$this->db_pass);
                    $this->_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $this->_bdd->exec('set names utf8');
                    
=======
             $this->bdd = NULL;
            
                try{
                    $this->_bdd = new PDO('mysql:host='.$this->db_host.':3306;dbname='.$this->db_name,$this->db_user,$this->db_pass);
                    $_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->_bdd->exec('set names utf8');
                    return $this->bdd;
>>>>>>> Master
                }catch(PDOException $e){
                    echo 'Erreur : ' .$e->getMessage();

                }
            
            
                
        }

        public function securisation($donnees){
            $donnees = htmlspecialchars($donnees); 
            $donnees = trim($donnees); 
            $donnees = stripcslashes($donnees); 
            $donnees = strip_tags($donnees); 
        
            return $donnees; 
        }
        public function getAll(){
            $sql = "SELECT * FROM ".$this->table;
<<<<<<< HEAD
            $query = $this->dbConnect()->prepare($sql);
=======
            $query = $this->dbConnect->prepare($sql);
>>>>>>> Master
            $query->execute();
            return $query->fetchAll();
        }
    }
?>