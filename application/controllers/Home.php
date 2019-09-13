<?php

class Home extends CI_Controller {

    public function index() {
        echo "Controller Home";
    }

    public function hello() {
        
        $this->load->view('home/index');
        
    }

}