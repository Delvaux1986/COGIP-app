<?php
class Home extends Model{

    public function __construct()
    {
        $this->view = "";
        $this->dbConnect();
    }

    public function displayHome(){
        
    }

}