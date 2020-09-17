<?php    
    
    class Invoice extends Controller{
        
        public $invoices;

        
        public function index(){
            
            $invoice = $this->loadModel('Invoices');
            $invoices = $invoice->SelectAllInvoicesWithComp();
            echo $this->render('Invoice' , compact('invoices'));

        }
        public function ShowInvoice($id){
            $invoice = $this->loadModel('Invoices');           
            $inv = $invoice->SelectInvoiceFromId($id);
            echo $this->render('InvoiceView', compact('inv'));
        }
        public function editInvoice($invoiceID){
            $ID= intval($invoiceID);
            
            $editInvoiceRef = $this->loadModel('Invoices');
            $invoice = $editInvoiceRef->invoiceByID($invoiceID);
            echo $this->render('editInvoice' , compact('invoice'));
        }
        // UPDATE INVOICE 
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
                echo '<meta http-equiv="refresh" content="3; url='.URL.'Invoice/editInvoice/'.$invoiceID.'">';
                die();
            } else {
                $CompanyID = intval($companyInfo['ID_Company']);
            }
            //--------------------
            include(ROOT.'models/contact.php');
            $contactRef = new Contact();
            $contactInfo = $contactRef->SelectContactFromName($contactFirstName, $contactLastName);
            if(! $contactInfo){
                echo "Contact $contactFirstName $contactLastName is uncorrect";
                // go to screen list of invoices without fct header() that will block 
                echo '<meta http-equiv="refresh" content="3; url='.URL.'Invoice/editInvoice/'.$invoiceID.'">';
                die();
            } else {
                $contactID = intval($contactInfo['ID_Contact']);
            }

            include(ROOT.'models/Invoices.php');
            $updateInvoiceRef = new Invoices();
            $updateInvoice = $updateInvoiceRef->updateInvoiceByID($invoiceID, $Number_Invoice, $Date_Invoice , $CompanyID, $contactID);
            //redirect to the given url avoiding the blocking when using the function header()
            echo '<meta http-equiv="refresh" content="0; url='.URL.'Invoice/index">';
            die();
        }
    }