<?php    
    
    class Home extends Controller{
        
        public function __construct(){
            $this->view = 'default';
            $this->menu = 'menu';
        }
        public function index(){
            $index = new Home();
            include(ROOT.'models/Home.php');
            $this->render('menu');
            

        }
       

    }