<?php
    session_start();
    
    class Company extends Model{

        public function __construct(){
            $this->table = "company";
            $this->dbConnect();
        }
        public function GetFiveCompanies(){
            $req = 'SELECT * FROM company LIMIT 5 ORDER BY ID_Company ASC';
            $show = $this->bdd->prepare($req);
            $show->execute();
            return $show->fetchAll(PDO::FETCH_ASSOC);
        }
        public function SelectCompanyFromId($id){
            $sql = "SELECT com.ID_Company , com.Name , com.Country , com.VAT , typ.Type_Company FROM company as com left JOIN type as typ on com.ID_Type = typ.ID_Type WHERE ID_Company ='".$id."' ORDER BY ID_Company DESC";
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        public function SelectInvoicesFromIdCompany($id){
            $sql = "SELECT inv.ID_Invoice , inv.Number_Invoice , inv.Date_Invoice , com.Name , com.VAT FROM invoice as inv LEFT JOIN company as com on com.ID_Company = inv.ID_Company WHERE inv.ID_Company ='".$id."'";
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
