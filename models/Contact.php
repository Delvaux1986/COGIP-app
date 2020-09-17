<?php
class Contact extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "contact";
        $this->dbConnect();
    }

    public function SelectContactFromId($id){
        $sql = "SELECT ct.ID_Contact, ct.Firstname,ct.Lastname,ct.Email , ct.Phone, com.Name 
        FROM contact as ct left JOIN company as com 
        on ct.ID_Company = com.ID_Company 
        WHERE ID_Contact ='".$id."'";
        
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
    public function showAllContacts(){
        $sql = "SELECT ct.ID_Contact, ct.Firstname,ct.Lastname,ct.Email , ct.Phone, com.Name 
        FROM contact as ct left JOIN company as com 
        on ct.ID_Company = com.ID_Company" ;
        
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
    public function SelectContactFromName($contactFirstName, $contactLastName){
        $sql = "SELECT * FROM contact WHERE Firstname ='".$contactFirstName."' 
        AND Lastname ='".$contactLastName."'";
        
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>