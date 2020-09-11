<?php    
    
    class Contacts extends Controller{
        
        public $contacts;
        
        public function index(){
            
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            $contacts = $listContact->SelectAll();
            echo $this->render('contact' , compact('contacts'));

        }
       

    }
 