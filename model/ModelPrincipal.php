<?php
    class Db{
        private  $db_name, $db_user , $db_pass, $db_host , $bdd;
        
        public function __construct($db_name , $db_user = "root", $db_pass = "" , $db_host = "localhost"){
            $this->db_name = $db_name;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->db_host = $db_host;
        }


        public function dbConnect(){
            if($this->bdd === null){
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
?>