<?php
class Contact extends Model{

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
    }

//     public function findBySlug(string $slug){
//         $sql = "SELECT * FROM ".$this->table." WHERE `Firstname`='".$slug."'";
//         $query = $this->_bdd->prepare($sql);
//         $query->execute();
//         echo "requetes EXECUTER ";
//         return $query->fetchAll(PDO::FETCH_ASSOC);    
//     }
    public function getContacts(){
            $sql = "SELECT * FROM contact";
            $query = $this->_bdd->prepare($sql);
            $query->execute();
            
            echo "get all contacts";
            return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
