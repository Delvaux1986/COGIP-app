<?php
    abstract class Controller{
           public $contacts;
        
            public function loadModel(string $model){
                include(ROOT.'models/'.$model.'.php');
                $this->model = new $model();
            }
            public function render(string $fichier, array $data = []){
                //START BUFFERING
                
                ob_start();
                extract($data);
                require_once(ROOT.'views/'.$fichier.'.php');
                $view = ob_get_clean();
                require_once(ROOT.'views/layouts/default.php');
                require_once(ROOT.'views/menu.php');
                return $view;
            }
    }