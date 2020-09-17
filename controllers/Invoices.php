<?php    
    class Invoices extends Controller{
        
        public $invoices;
        
        public function index(){
            include(ROOT.'models/Invoice.php');
            $listInvoices = new Invoice();
            $invoices = $listInvoices->invoicesList();
            echo $this->render('invoice' , compact('invoices'));
        }

        public function invoiceID($invoiceID){
            include(ROOT.'models/Invoice.php');
            $invoiceRef = new Invoice();
            $invoice = $invoiceRef->invoiceByID($invoiceID);
            echo $this->render('invoiceByID' , compact('invoice'));
        }

        public function deleteInvoice($invoiceID){
            include(ROOT.'models/Invoice.php');
            $deleteInvoiceRef = new Invoice();
            $deleteInvoice = $deleteInvoiceRef->deleteInvoiceByID($invoiceID);
            //redirect to the given url avoiding the blocking when using the function header()
            echo '<meta http-equiv="refresh" content="0; url='.LOCAL_ROOT.'invoices/index">';
            die();
        } 

        public function editInvoice($invoiceID){
            $ID= intval($invoiceID);
            include(ROOT.'models/Invoice.php');
            $editInvoiceRef = new Invoice();
            $invoice = $editInvoiceRef->invoiceByID($invoiceID);
            echo $this->render('editInvoice' , compact('invoice'));
        }

        public function updateInvoice(){
            $invoiceID = intval($_POST['ID_Invoice']);
            $Number_Invoice = $_POST['invoiceNumber'];
            $Date_Invoice = $_POST['invoiceDate'];
            $CompanyName = $_POST['companyName'];
            $name = explode(' ', $_POST['contactName']);
            $contactFirstName = $name[0];
            $contactLastName = $name[1];
            
            include(ROOT.'models/Company.php');
            $companyRef = new Company();
            $companyInfo = $companyRef->SelectCompanyFromName($CompanyName);

            
            if(! $companyInfo){
                echo "Company name $CompanyName is uncorrect";
                // go to screen list of invoices without fct header() that will block 
                echo '<meta http-equiv="refresh" content="3; url='.LOCAL_ROOT.'invoices/editInvoice/'.$invoiceID.'">';
                die();
            } else {
                $CompanyID = intval($companyInfo['ID_Company']);
            }
            //--------------------
            include(ROOT.'models/Contact.php');
            $contactRef = new Contact();
            $contactInfo = $contactRef->SelectContactFromName($contactFirstName, $contactLastName);
            
            if(! $contactInfo){
                echo "Contact $contactFirstName $contactLastName is uncorrect";
                // go to screen list of invoices without fct header() that will block 
                echo '<meta http-equiv="refresh" content="3; url='.LOCAL_ROOT.'invoices/editInvoice/'.$invoiceID.'">';
                die();
            } else {
                $contactID = intval($contactInfo['ID_Contact']);
            }

            include(ROOT.'models/Invoice.php');
            $updateInvoiceRef = new Invoice();
            $updateInvoice = $updateInvoiceRef->updateInvoiceByID($invoiceID, $Number_Invoice, $Date_Invoice , $CompanyID, $contactID);
            //redirect to the given url avoiding the blocking when using the function header()
            echo '<meta http-equiv="refresh" content="0; url='.LOCAL_ROOT.'invoices/index">';
            die();
        }
    }
?>