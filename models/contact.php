<?php
class Contact extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
        
    }
    public function SelectContactFromId($id){
        $sql = "SELECT ct.ID_Contact, ct.Firstname,ct.Lastname,ct.Email , ct.Phone, com.Name FROM contact as ct left JOIN company as com on ct.ID_Company = com.ID_Company WHERE ID_Contact ='".$id."'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function SelectInvoiceForContact($id){
        $sql = "SELECT inv.ID_Invoice , inv.Number_Invoice , inv.Date_Invoice , inv.ID_Contact ,com.ID_Contact, com.Firstname , com.Lastname FROM invoice as inv LEFT JOIN contact as com on inv.ID_Contact = com.ID_Contact WHERE inv.ID_Contact ='".$id."'";
        $query =  $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function SelectCompForUser(){
        $sql = "SELECT con.ID_Contact , con.Firstname , con.Lastname , con.Email , con.Phone , com.Name FROM contact as con LEFT JOIN company as com on con.ID_Company = com.ID_Company WHERE con.ID_Company = com.ID_Company ORDER BY con.ID_Contact ASC";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
