<?php    
    
    class Admin extends Controller{
        public $admin;
        public $contactArray = [];

        // READ
        public function DashBoard(){
            $dash = $this->loadModel('AdminModel');
            $admin = $dash->GetUser();
            echo $this->render('AdminView', compact('admin'));
        }

        public function index(){
            include(ROOT.'models/Contact.php');
            $listContact = new Contact();
            $contacts = $listContact->SelectAll();
            echo $contacts;
        }
        
        // CREATE
        public function NewContact(){
                $cont = $this->loadModel('AdminModel');
                $AddContact = $cont->AddContactToDb();
                echo $this->render('newContact', compact('AddContact'));
                // header('location: http://localhost/COGIP-app/Contacts/index');
        }

        public function NewCompany(){
            $comp = $this->loadModel('AdminModel');
            $AddCompany = $comp->AddCompanyToDb();
            echo $this->render('newCompany', compact('AddCompany'));
        }

        public function NewInvoice(){
            $inv = $this->loadModel('AdminModel');
            $AddInvoice = $inv->AddInvoiceToDb();
            $listContacts = $inv->GetAllContacts();
            echo $this->render('newInvoice', compact('listContacts'));
            
        }

        // LOGIN
        public function login() {

            $log = $this->loadModel('AdminModel');
            $login = $log->GetUser();
            
            if(in_array($_POST['login'] , $login ) == TRUE && in_array(array($_POST['password']) , $login) == TRUE){
                ECHO 'YOU ARE LOGGED !!!!!!!!!!!!!!!!!!!';
                $_SESSION['Admin'] = "logged";
            }else{
                echo "Login or password Wrong !!!";
            }
            var_dump(in_array($_POST['login'] , $login ));
            var_dump(in_array($_POST['password'] , $login));
            // var_dump($login);
            // echo $this->render('AdminView', compact('login'));
        
    }
}