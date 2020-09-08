<?php
    Abstract class Db{
        
        private  $db_name, $db_user , $db_pass, $db_host;

        public $id;
        public $table;
        
        public function __construct($db_name , $db_user = "root", $db_pass = "" , $db_host = "localhost"){
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_host = $db_host;
        }
        protected $_bdd;

        public function dbConnect(){
             $this->bdd = NULL;
            if($this->bdd === NULL){
                try{
                    $bdd = new PDO("mysql:host=localhost:3306;dbname=COGYP","root","");
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->bdd = $bdd;
                    return $this->bdd;
                }catch(PDOException $e){
                    echo 'Erreur : ' .$e->getMessage();

                }
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
            $query = $this->dbConnect->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }
    }
?>