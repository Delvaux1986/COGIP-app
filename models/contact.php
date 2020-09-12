<?php
class Contact extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
        
    }
    public function SelectContactFromId($id){
        $sql = "SELECT * FROM ".$this->table."  WHERE ID_Contact ='".$id."'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
}
