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
                // die();
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
            $login = $log->findUser();
            // var_dump($login);
            echo $this->render('AdminView', compact('login'));
        }

        //LOGOUT













        // public function Loggin(){
        //     $username = $password = $profil = '';
        //     if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //         $usernifo = 
        //         if($_POST['username'] === )


        //         $username = admin($db,$_POST['username']);
        //         $sql = "SELECT ID_User FROM user WHERE `name`='$username' AND `password`='$password'";
        //         $result = musqli_query($db,$sql);
        //         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //         $active = $row['active'];

        //         $count = msql_num_rows($result);
        //         // security first ->securisation($donnees)
        //         // verify username in db

        //         // if ($_POST['username'] != $admin['Name']) {
        //         //     echo 'False user name';
        //         // }

        //         // verify password with hash
        //         // START SESSION Admin or Moderator
        //         $_SESSION["profil"] = $_POST['profil'];
        //     }
        // }

        // CREATE Sessions with conditions
    }