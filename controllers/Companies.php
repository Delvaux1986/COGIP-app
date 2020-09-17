<?php    
    

    class Companies extends Controller{
        
        public $companies;

        //index for Companies
        public function index(){
            include(ROOT.'models/Company.php');
            $model = new Company();
            
            $companies = $model->SelectAll();
            echo $this->render('company' , compact('companies'));

        }
        // for Show 5 company on Home page
        public function showFiveCompanies(){
            include(ROOT.'models/Company.php');
            $model = new Company();
            $companies = $model->getFiveCompanies();
            echo $this->render('company' , compact('companies'));
        }
        // Show  les company A l'unité quand on click sur l'id 
        public function showCompany($id){
            $data = $this->loadModel('Company');
            $company = $data->SelectCompanyFromId($id);
            $invoices = $data->SelectInvoicesFromIdCompany($id);
            echo $this->render('CompanyView', compact('company', 'invoices'));
             
         }
    }