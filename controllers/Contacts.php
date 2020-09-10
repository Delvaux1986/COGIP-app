<?php    
    
    class Contacts extends Controller{
        
        public $contacts;
        
        public function index(){
            
            include(ROOT.'models/contact.php');
            $listContact = new Contact();
            $contacts = $listContact->SelectAll();
            echo $this->render('contact' , compact('contacts'));

        }
       

    }
      // echo '<table class="table col-md-3 offset-md-3">';
            // echo '<thead><tr>';
            // echo '<th>#</th>';
            // echo '<th>Firstanme</th>';
            // echo '<th>Lastname</th>';
            // echo '<th>Email</th>';
            // echo '<th>Phone</th>';
            // echo '</tr></thead>';
            // echo '<tbody>';
            // foreach($contacts as $contact){
            //     echo '<tr>';
            //     echo '<th >'.$contact['ID_Contact'].'</th>';
            //     echo '<th >'.$contact['Firstname'].'</th>';
            //     echo '<th >'.$contact['Lastname'].'</th>';
            //     echo '<th >'.$contact['Email'].'</th>';
            //     echo '<th >'.$contact['Phone'].'</th>';
                

            // }