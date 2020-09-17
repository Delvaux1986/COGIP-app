<?php
class Invoices extends Model{
    public $id;

    public function __construct()
    {
        $this->table = "invoice";
        $this->dbConnect();
        
    }
    public function SelectAllInvoicesWithComp(){
        $sql = "SELECT inv.ID_Invoice , inv.Number_Invoice ,inv.Date_Invoice , com.Name FROM invoice as inv LEFT JOIN company as com on inv.ID_Company = com.ID_Company ORDER BY inv.ID_Invoice ASC"; 
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
    public function updateInvoiceByID($invoiceID, $Number_Invoice, $Date_Invoice , $ID_Company, $ID_Contact){
        $sql = "UPDATE invoice set Number_Invoice = '$Number_Invoice', Date_Invoice = '$Date_Invoice',
                 ID_Company=$ID_Company , ID_Contact=$ID_Contact WHERE ID_Invoice = $invoiceID" ;

        try{
        $query = $this->bdd->prepare($sql);
        $query->execute();
        }catch (Exception $error){
            echo "updateInvoiceByID ERROR = "; var_dump($error);
        }
    }
    public function invoiceByID($invoiceID){
        $invoiceID= intval($invoiceID);
        $sql = "SELECT inv.ID_Invoice, inv.Number_Invoice, inv.Date_Invoice, com.Name, t.Type_Company, ct.Firstname , ct.Lastname 
        FROM invoice as inv left join company as com 
        on inv.ID_Company = com.ID_Company 
        left join type as t 
        on com.ID_Type = t.ID_Type
        left join contact as ct
        on inv.ID_Contact = ct.ID_Contact
        where ID_Invoice = $invoiceID";

        $query = $this->bdd->prepare($sql);
        $query->execute();

        $res = $query->fetch(PDO::FETCH_ASSOC);
        return $res;  
    }
}