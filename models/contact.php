<?php
class Contact extends Model{

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
    }

    public function SelectAll(){
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);    
    }

}
