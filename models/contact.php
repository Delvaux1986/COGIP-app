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
    
}
