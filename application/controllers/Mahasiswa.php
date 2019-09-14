<?php

class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index() {
        
        $data['judul'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllData();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {

        $data['judul'] = 'Tambah Data';
        
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/tambah', $data);
        $this->load->view('templates/footer');
    }
    
}