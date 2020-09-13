<?php
    class AdminModel extends Model{

        
        public function __construct(){
            $this->table = "user";
            $this->dbConnect();
        }

        public function GetUser(){
            $sql = "SELECT * FROM user";
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function AddContactToDb(string $firstname , string $lastname , string $Email , string $Phone , int $id_Comp){
            include(ROOT."controllers/Admin.php");
            $sql = "INSERT INTO user ('Firstname' , 'Lastname' , 'Email' , 'Phone' , 'ID_Company') VALUES ('".$_POST['firstname']."','".$lastname."','".$Email."','".$Phone."','".$id_Comp."')";
            $inject = $this->bdd->prepare($sql);
            $inject->execute();
            echo 'CONTACT AJOUTER ';

        }
    }