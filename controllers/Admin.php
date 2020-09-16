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
            if($_SESSION['TypeUser'] === "Admin"){    
                $cont = $this->loadModel('AdminModel');
                $AddContact = $cont->AddContactToDb();
                echo $this->render('newContact', compact('AddContact'));
            }else{
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
            }
        }

        public function NewCompany(){
            if($_SESSION['TypeUser'] === "Admin"){
                $comp = $this->loadModel('AdminModel');
                $AddCompany = $comp->AddCompanyToDb();
                echo $this->render('newCompany', compact('AddCompany'));
            }else{
                var_dump($_SESSION['TypeUser']);
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
            }
            
        }

        public function NewInvoice(){
            if($_SESSION['TypeUser'] === "Admin"){
                $inv = $this->loadModel('AdminModel');
                $AddInvoice = $inv->AddInvoiceToDb();
                $listContacts = $inv->GetAllContacts();
                echo $this->render('newInvoice', compact('listContacts'));
            }else{
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
            }
        }

        // LOGIN
        public function login() {

            $log = $this->loadModel('AdminModel');
            $login = $log->GetUser();
                if(isset($_POST['login']) && isset($_POST['password'])){
                    foreach($login as $log){                    
                       if($log['Name'] == $_POST['login'] && $log['Hash_Password'] == $_POST['password']){
                            session_start(); 
                            $_SESSION['TypeUser'] = $log['Profil'];
                            Echo "<p class='text-center'>YOU ARE CONNECTED !!!!!!!!</p>";
                           
                       }
                   }if($_SESSION['TypeUser'] === "Admin"){
                        echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/DashBoard">';
                   }else if($_SESSION['TypeUser'] === "Modérateur"){
                        echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/DashBoard">';
                   }else{
                           echo "<p class='text-center text-danger font-weight-bold mt-5'>Bad Login or Password !!!</p>";
                           echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
                       }
                //    header("location : https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/DashBoard");
                   //
                      
                }
                       
                    }
            
            
                
        
    }
