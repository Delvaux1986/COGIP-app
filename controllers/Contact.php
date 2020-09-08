<?php
    class Contact extends Controller{
        public function index(){
            $this->loadModel('contact');
            $contact = $this->Contact->getAll();
            var_dump($contact);
        }
        }
    