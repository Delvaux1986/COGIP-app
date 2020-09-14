<?php
class Invoices extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "invoice";
        $this->dbConnect();
        
    }
    public function SelectAllInvoicesWithComp(){
        $sql = "SELECT inv.ID_Invoice , inv.Number_Invoice ,inv.Date_Invoice , com.Name FROM invoice as inv LEFT JOIN company as com on inv.ID_Company = com.ID_Company"; 
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function SelectInvoiceFromId($id){
        $sql = "SELECT inv.ID_Invoice , inv.Number_Invoice ,inv.Date_Invoice , com.Name FROM invoice as inv LEFT JOIN company as com on inv.ID_Company = com.ID_Company WHERE ID_Invoice ='".$id."'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}