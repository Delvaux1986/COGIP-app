<?php    
    
    class Contacts extends Controller{
        
        public $contacts;
        
        public function index(){
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            $contacts = $listContact->showAllContacts();
            echo $this->render('contact' , compact('contacts'));
        }

        public function showContact($id){
           $user = $this->loadModel('contact');
           $contacts = $user->SelectContactFromId($id);
           echo $this->render('user', compact('contacts'));
        }


    }
 