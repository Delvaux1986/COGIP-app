<?php
    class Contacts extends Controller{
        public function index(){
            echo 'Hello World !!!';
            $this->loadModel('Contact');
<<<<<<< HEAD
            $contacts = $this->Contacts->getAll();
=======
            $contact = $this->Contact->getAll();
>>>>>>> Master
            
        }
        public function lire(string $slug){
            $this->loadModel('Contact');

<<<<<<< HEAD
            $contacts = $this->Contacts->findBySlug($slug);

            $this->render('lire' , compact('contacts'));
=======
            $contact = $this->Contact->findBySlug($slug);

            $this->render('lire' , compact('contact'));
>>>>>>> Master
        }
    }
    