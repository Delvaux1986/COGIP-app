<?php
    class Company extends Model{

        public function __construct(){
            $this->table = "company";
            $this->dbConnect();
        }
        public function GetFiveCompanies(){
            $req = 'SELECT * FROM company LIMIT 5';
            $show = $this->bdd->prepare($req);
            $show->execute();
            return $show->fetchAll(PDO::FETCH_ASSOC);



        }
    }
