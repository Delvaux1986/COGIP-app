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
    }