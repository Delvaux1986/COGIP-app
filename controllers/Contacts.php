<?php    
    
    class Contacts extends Controller{
        
        public $contacts;

        
        public function index(){
            
            include(ROOT.'models/contact.php');
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
        public function editContact($ID){
            $ID= intval($ID);
            
            $editcontactref = $this->loadModel('contact');
            $contact = $editcontactref->contactByDb($ID);
            echo $this->render('editContact' , compact('contact'));
        }
        // UPDATE INVOICE 
        public function updateContact(){            
            $idContact = intval($_POST['ID_Contact']);
            $firstname = $_POST['Firstname'];
            $lastname = $_POST['Lastname'];
            $mail = $_POST['Email'];
            $phone = $_POST['Phone'];
            $Comp = $_POST['NameCompany'];

        

            $newContact = $this->loadModel('contact');
            var_dump($newContact);
            echo '<br>';
            // $listcompany = $newContact->LookForCompIdInDb($comp);
            var_dump($listcompany);
            echo '<br>';
            $newContact->InsertIntoContactDb($idContact , $firstname , $lastname , $mail , $phone , $comp);

            echo '<meta http-equiv="refresh" content=".5; url='.URL.'Contacts/index">';
            

            
            
        }

    }
 