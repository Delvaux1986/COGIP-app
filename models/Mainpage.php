<?php
class Mainpage extends Model{

    public function __construct()
    {
        $this->view = "";
        $this->dbConnect();
    }
    public function GetCompanyForMain(){
        $sql = "SELECT com.ID_Company , com.Name , com.VAT , com.Country , typ.Type_Company FROM company as com LEFT JOIN type as typ on com.ID_Type = typ.ID_Type ORDER BY com.ID_Company DESC LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetContactsForMain(){
        $sql = "SELECT ct.ID_Contact, ct.Firstname,ct.Lastname,ct.Phone , ct.Email ,com.Name FROM contact as ct left join company as com on ct.ID_Company = com.ID_Company ORDER BY ct.ID_Contact DESC LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function GetInvoicesForMain(){
        $sql = "SELECT inv.ID_Invoice ,inv.Number_Invoice , inv.Date_Invoice , com.Name FROM invoice as inv join company as com on inv.ID_Company = com.ID_Company ORDER BY inv.ID_Invoice DESC LIMIT 5" ;
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}