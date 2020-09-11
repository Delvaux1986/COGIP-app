<?php    
    
    class Companies extends Controller{
        
        public $companies;

        public function index(){
            include(ROOT.'models/Company.php');
            $model = new Company();
            
            $companies = $model->SelectAll();
            echo $this->render('company' , compact('companies'));

        }
        public function showFiveCompanies(){
            include(ROOT.'models/Company.php');
            $model = new Company();
            $companies = $model->getFiveCompanies();
            echo $this->render('company' , compact('companies'));
        }
    }