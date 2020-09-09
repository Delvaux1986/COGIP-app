<?php
class Contact extends Model{

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
    }

    public function findBySlug(string $slug){
        $sql = "SELECT * FROM ".$this->table." WHERE `Firstname`='".$slug."'";
        $query = $this->_bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);    
    }

}
