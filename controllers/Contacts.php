<?php
    class Contacts extends Controller{
        public function index(){
            echo 'Hello World !!!';
            $this->loadModel('Contact');
            $contact = $this->Contact->getAll();
            
        }
        public function lire(string $slug){
            $this->loadModel('Contact');

            $contact = $this->Contact->findBySlug($slug);

            $this->render('lire' , compact('contact'));
        }
    }
    