<?php
class Mainpage extends Model{

    public function __construct()
    {
        $this->view = "";
        $this->dbConnect();
    }
    public function GetCompanyForMain(){
        $sql = "SELECT * FROM company LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetContactsForMain(){
        $sql = "SELECT * FROM contact LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetInvoicesForMain(){
        $sql = "SELECT * FROM invoice LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}