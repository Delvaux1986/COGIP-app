<?php    
    
    class Admin extends Controller{
        public $admin;
        public $contactArray = [];

        public function DashBoard(){
            $dash = $this->loadModel('AdminModel');
            $admin = $dash->GetUser();
            echo $this->render('AdminView', compact('admin'));
        }

        public function SetPost(){
            $contactArray = [];
            array_push($contactArray , $_POST['firstname'] , $_POST['lastname'] , $_POST['email'] ,$_POST['phone'] ,$_POST['idComp']);
            return $contactArray;

        }
        
        // CREATE
        public function NewContact(){
            if (isset($_POST['submitNewContact'])) {
                $contact = SetPost();
                // call method MODEL AddContactToDb()
                
                // return to page ???
            }
            // return array;
        }
        public function NewCompany(){

        }
        public function NewInvoice(){

        }

        public function login() {

            $log = $this->loadModel('AdminModel');
            $login = $log->findUser();
            // var_dump($login);
            echo $this->render('AdminView', compact('login'));
        }













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