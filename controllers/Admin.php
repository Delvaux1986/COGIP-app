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
            if($_SESSION['TypeUser'] === "Admin") {
                $cont = $this->loadModel('AdminModel');
                $AddContact = $cont->AddContactToDb();
                echo $this->render('newContact', compact('AddContact'));
                // header('location: http://localhost/COGIP-app/Contacts/index');
                // die();
            } else {
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url=http://localhost/COGIP-app/Home/index">';
            }
                
        }

        public function NewCompany(){
            if($_SESSION['TypeUser'] === "Admin"){
                $comp = $this->loadModel('AdminModel');
                $AddCompany = $comp->AddCompanyToDb();
                echo $this->render('newCompany', compact('AddCompany'));
            }else{
                // var_dump($_SESSION['TypeUser']);
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url=http://localhost/COGIP-app/Home/index">';
            }
        }

        public function NewInvoice(){
            if($_SESSION['TypeUser'] === "Admin"){
                $inv = $this->loadModel('AdminModel');
                $AddInvoice = $inv->AddInvoiceToDb();
                $listContacts = $inv->GetAllContacts();
                echo $this->render('newInvoice', compact('listContacts'));
            } else {
                echo 'You are not Connected ';
                echo '<meta http-equiv="refresh" content="4; url=http://localhost/COGIP-app/Home/index">';
            }
        }

        // LOGIN
        public function login() {
            $log = $this->loadModel('AdminModel');
            $login = $log->GetUser();
            // var_dump($login);
            echo $this->render('AdminView', compact('login'));
            if(isset($_POST['login']) && isset($_POST['password'])){
                foreach($login as $log){                    
                    if($log['Name'] == $_POST['login'] && $log['Hash_Password'] == $_POST['password']){
                        session_start(); 
                        $_SESSION['TypeUser'] = $log['Profil'];
                        Echo "<p class='text-center'>YOU ARE CONNECTED !!!!!!!!</p>";
                    }
                }
                if($_SESSION['TypeUser'] === "Admin"){
                    echo '<meta http-equiv="refresh" content="2; url=http://localhost/COGIP-app/Admin/DashBoard">';
                }else if($_SESSION['TypeUser'] === "Modérateur"){
                    echo '<meta http-equiv="refresh" content="2; url=http://localhost/COGIP-app/Admin/DashBoard">';
                }else{
                       echo "<p class='text-center text-danger font-weight-bold mt-5'>Bad Login or Password !!!</p>";
                       echo '<meta http-equiv="refresh" content="4; url=http://localhost/COGIP-app/Home/index">';
                }
                //    header("location : https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/DashBoard");                  
            }
        }

        //LOGOUT


    }








        // public function NewCompany(){
        //     if($_SESSION['TypeUser'] === "Admin"){
        //         $comp = $this->loadModel('AdminModel');
        //         $AddCompany = $comp->AddCompanyToDb();
        //         echo $this->render('newCompany', compact('AddCompany'));
        //     }else{
        //         var_dump($_SESSION['TypeUser']);
        //         echo 'You are not Connected ';
        //         echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
        //     }
            
        // }

        // public function NewInvoice(){
        //     if($_SESSION['TypeUser'] === "Admin"){
        //         $inv = $this->loadModel('AdminModel');
        //         $AddInvoice = $inv->AddInvoiceToDb();
        //         $listContacts = $inv->GetAllContacts();
        //         echo $this->render('newInvoice', compact('listContacts'));
        //     }else{
        //         echo 'You are not Connected ';
        //         echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
        //     }
        // }

        // LOGIN
        // public function login() {

        //     $log = $this->loadModel('AdminModel');
        //     $login = $log->GetUser();
        //         if(isset($_POST['login']) && isset($_POST['password'])){
        //             foreach($login as $log){                    
        //                if($log['Name'] == $_POST['login'] && $log['Hash_Password'] == $_POST['password']){
        //                     session_start(); 
        //                     $_SESSION['TypeUser'] = $log['Profil'];
        //                     Echo "<p class='text-center'>YOU ARE CONNECTED !!!!!!!!</p>";
                           
        //                }
        //            }if($_SESSION['TypeUser'] === "Admin"){
        //                 echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/DashBoard">';
        //            }else if($_SESSION['TypeUser'] === "Modérateur"){
        //                 echo '<meta http-equiv="refresh" content="2; url='.URL.'Admin/DashBoard">';
        //            }else{
        //                    echo "<p class='text-center text-danger font-weight-bold mt-5'>Bad Login or Password !!!</p>";
        //                    echo '<meta http-equiv="refresh" content="4; url='.URL.'Home/index">';
        //                }
        //         //    header("location : https://delvauxrobby.yj.fr/delvauxrobby.yj.fr/blog/Assets/COGIP-app/Admin/DashBoard");
        //            //
                      
        //         }
                       
        // }


    
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