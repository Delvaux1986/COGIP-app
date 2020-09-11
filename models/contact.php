<?php
class Contact extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
        
    }
    public function SelectContactFromId(){
        $sql = "SELECT * FROM ".$this->table."  WHERE ID_Contact ='".$this->id."'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        echo $query->fetch(PDO::FETCH_ASSOC);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
}
