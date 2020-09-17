<?php
    class Invoice extends Model{
        public function __construct()
        {
            $this->table = "invoice";
            $this->dbConnect();
        }
            
        public function invoicesList(){
            $sql = "SELECT inv.ID_Invoice, inv.Number_Invoice, inv.Date_Invoice, com.Name, t.Type_Company
                    FROM invoice as inv left join company as com 
                    on inv.ID_Company = com.ID_Company 
                    left join type as t 
                    on com.ID_Type = t.ID_Type";

            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);  
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

        public function deleteInvoiceByID($invoiceID){
            $ID= intval($invoiceID);
            $sql = "DELETE FROM invoice WHERE ID_Invoice = $ID";
            
            try{
            $query = $this->bdd->prepare($sql);
            $query->execute();
            //no fetch() because fetch() NOT needed , otherwise ERROR
            }catch (Exception $error){
                echo "deleteInvoiceByID ERROR = "; var_dump($error);
            }
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
    }
?>
