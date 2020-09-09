<?php
    class Contacts extends Controller{
        public $contacts;
        
        
        public function index(){
            echo 'Hello World !!!';
            $this->loadModel('Contacts');
            $contacts = $this->Contacts->getAll();
            
        }
        public function lire(string $slug){
            $this->loadModel('Contacts');

            $contacts = $this->Contacts->findBySlug($slug);

            $this->render('lire' , compact('contacts'));
        }
    }
    