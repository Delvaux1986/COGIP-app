<?php
    abstract class Controller{
           public $contacts;
           public $id;

           public function __construct(){
               $this->id = $this->id;
           }
        
            public function loadModel(string $model){
                include(ROOT.'models/'.$model.'.php');
                $this->model = new $model();
                return $this->model;
            }

            
            public function render(string $fichier, array $data = []){
                //START BUFFERING
                ob_start();
                extract($data);
                
                require_once(ROOT.'views/'.$fichier.'.php');
                $view = ob_get_clean();
                require_once(ROOT.'views/layouts/default.php');
                
                return $view;
            }
            
            
    }