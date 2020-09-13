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
            array_push($contactArray , $_POST['firstname'] , $_POST['lastname'] , $_POST['Email'] ,$_POST['Phone'] ,$_POST['ID_Company']);
            return $contactArray;

        }
        
        public function NewContact(){
            $contact = SetPost();


            // return array;
        }
        public function NewCompany(){

        }
        public function NewInvoice(){

        }
    }