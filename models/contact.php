<?php
class Contact extends Model{

    public function __construct()
    {
        $this->table = "contacts";
        $this->dbConnect();
    }

    public function findBySlug(string $slug){
        $sql = "SELECT * FROM ".$this->table." WHERE `slug`='".$slug."'";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);    
    }

}
