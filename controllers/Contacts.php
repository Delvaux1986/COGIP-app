<?php
    class Contacts extends Controller{
        public $contact;
        public $content;
        
        
        public function index(){
            echo 'Hello World !!!';
            $this->loadModel('Contact');
            $contact = $this->Contact->getAll();
            
        }
        // public function lire(string $slug){
        //     $this->loadModel('Contacts');

        //     $contacts = $this->Contacts->findBySlug($slug);

        //     $this->render('lire' , compact('contacts'));
        // }
        public function displayContact(){
            echo 'LANCEMENT DISPLAY CONTACT';
            require_once("./views/layouts/default.php");
            
            $content = new Contacts();
            $contenu = $this->content->getContacts();
              
            $this->render('layouts/default.php' , compact($content));
            
            
            // return $content;
        }
    }
    