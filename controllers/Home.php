<?php    
    
    class Home extends Controller{
        
        public $view;
        
        public function __construct(){
            $this->view = 'default';
            $this->menu = 'menu';
        }
        public function index(){
            $index = $this->loadModel('Mainpage');
            $contentComp = $index->GetCompanyForMain();
            $contentCont = $index->GetContactsForMain();
            $contentInv = $index->GetInvoicesForMain();
            
            
            echo $this->render('home' , compact('contentComp', 'contentCont', 'contentInv') );

        }
        

    }