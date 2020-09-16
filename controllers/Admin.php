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
        // DELETE FROM ID 

        public function DeleteFromId($id){
            
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
                            
                       }
                   }if($_SESSION['TypeUser'] === "Admin"){
                        $index = $this->loadModel('Mainpage');
                        $invoices = $index->GetInvoicesForMain();   
                        $contacts = $index->GetContactsForMain();
                        $companies = $index->GetCompanyForMain();
                        echo $this->render('AdminView' , compact('invoices', 'contacts' , 'companies'));
                   }else if($_SESSION['TypeUser'] === "Modérateur"){
                        echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/DashBoard">';
                   }else{
                        //    echo "<p class='text-center text-danger font-weight-bold mt-5'>Bad Login or Password !!!</p>";
                        //    echo '<meta http-equiv="refresh" content="2; url='.URL.'Home/index">';
                   }
                }
                       
        }
        // LOG OUT 
        public function Logout(){
            session_unset();
            session_destroy();
            echo "<meta http-equiv='refresh' content='2; url=https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Home/index'>";
            }
        
            
            
                
        
    }
