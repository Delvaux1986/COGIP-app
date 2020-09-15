<?php
    class AdminModel extends Model{

        public $result;
        
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

        public function findUser() {
            $sql = "SELECT * FROM user";
            $query = $this->bdd->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        // Get Contacts to display in form AddInvoice
        public function GetAllContacts() {
            $sql = "SELECT * FROM contact";
            $query = $this->bdd->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC); 
        }

        // CREATE USER (Admin only)
        public function AddUserToDb(string $username , string $Hash_Password , string $profil){
            include(ROOT."controllers/Admin.php");
            $sql = "INSERT INTO user ('Name', 'Hash_Password', 'Profil') VALUES ('".$username."','".$Hash_Password."','".$profil."')";
            $inject = $this->bdd->prepare($sql);
            $inject->execute();
            //header(); REDIRECTION
            echo 'UTILISATEUR AJOUTÉ';
        }

        // CREATE
        public function AddContactToDb(){
            if (isset($_POST['submitNewContact'])) {
                $sth = $this->bdd->prepare("INSERT INTO contact(Firstname, Lastname, Email, Phone, ID_Company) 
                VALUES(?,?,?,?,?)");
                // $_POST['idComp'] = 1;
                $sth->execute(array($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone'],$_POST['idComp']));
            }
        }

        public function AddCompanyToDb(){
            if (isset($_POST['submitNewCompany'])) {
                $sth = $this->bdd->prepare("INSERT INTO company (`Name`, Country, VAT, ID_Type) 
                VALUES (?,?,?,?)");
                $sth->execute(array($_POST['compName'],$_POST['compCountry'],$_POST['compVAT'],$_POST['compType']));
            }
        }

        public function AddInvoiceToDb(){
            if (isset($_POST['submitNewInvoice'])) {
                $sth = $this->bdd->prepare("INSERT INTO invoice (Number_Invoice, Data_Invoice, ID_Company, ID_Contact) 
                VALUES (?,?,?,?)");
                $sth->execute(array($_POST['numberInvoice'],$_POST['dateInvoice'],$_POST['idComp'],$_POST['idContact']));
            }
        }
        
        // UPDATE (Admin & Moderator)

        
        // DELETE (Admin only)
    }