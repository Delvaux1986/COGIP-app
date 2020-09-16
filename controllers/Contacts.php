<?php    
    
    class Contacts extends Controller{
        
        public $contacts;

        
        public function index(){
            
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            
            $comp = $listContact->SelectCompForUser();
            echo $this->render('contact' , compact('comp'));

        }
        public function showContact($id){
           $user = $this->loadModel('contact');
           $contacts = $user->SelectContactFromId($id);
           $invoices = $user->SelectInvoiceForContact($id);
           echo $this->render('user', compact('contacts','invoices'));
            
        }

    }
 