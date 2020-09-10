<?php
class Mainpage extends Model{

    public function __construct()
    {
        $this->view = "";
        $this->dbConnect();
    }
    public function GetForshowHome(){
        $sql = "SELECT * FROM company,contact,invoice LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    

}