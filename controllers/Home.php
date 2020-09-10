<?php    
    
    class Home extends Controller{
        
        public $content;
        
        public function __construct(){
            $this->view = 'default';
            $this->menu = 'menu';
        }
        public function index(){
            include(ROOT.'models/Mainpage.php');
            $index = new Mainpage();
            $content = $index->GetForshowHome();
            var_dump($content);

            return  $this->render('home' , compact('content'));
            
            
            

        }
       

    }