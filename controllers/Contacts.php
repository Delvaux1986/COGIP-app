<?php
    class Contacts extends Controller{
        public function index(){
            echo 'Hello World !!!';
            $this->loadModel('Contact');
            $contacts = $this->Contacts->getAll();
            
        }
        public function lire(string $slug){
            $this->loadModel('Contact');

            $contacts = $this->Contacts->findBySlug($slug);

            $this->render('lire' , compact('contacts'));
        }
    }
    