<?php
    Abstract class Model{
        
        private $db_name = "cogip";
        private $db_user = "root";
        private $db_pass =  "";
        private $db_host = "localhost";

        public $id;
        public $table;
        public $content;
        
        
        protected $bdd;

        public function dbConnect(){
             $this->_bdd = NULL;
            
                try{
                    $this->bdd = new PDO('mysql:host='.$this->db_host.':3307;dbname='.$this->db_name,$this->db_user,$this->db_pass);
                    $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->bdd->exec('set names utf8');
                        return $this->bdd;
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
        public function SelectAll(){
            $sql = "SELECT * FROM ".$this->table;
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);    
        }
        
    
    }
?>