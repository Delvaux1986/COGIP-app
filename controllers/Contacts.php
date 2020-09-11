<?php    
    
    class Contacts extends Controller{
        
        public $contacts;

        
        public function index(){
            
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            $contacts = $listContact->SelectAll();
            echo $this->render('contact' , compact('contacts'));

        }
        public function showContact(){
            include(ROOT.'models/Contact.php');
            $contact = new Contact();
            $user = $contact->SelectContactFromId();
            var_dump($user);
            echo $this->render('user', compact('user'));
            
        }

    }
 