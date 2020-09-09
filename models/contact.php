<?php
class Contact extends Model{

    public function __construct()
    {
<<<<<<< HEAD
        $this->table = "contact";
=======
        $this->table = "contacts";
>>>>>>> Master
        $this->dbConnect();
    }

    public function findBySlug(string $slug){
<<<<<<< HEAD
        $sql = "SELECT * FROM ".$this->table." WHERE `Firstname`='".$slug."'";
        $query = $this->_bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);    
=======
        $sql = "SELECT * FROM ".$this->table." WHERE `slug`='".$slug."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);    
>>>>>>> Master
    }

}
