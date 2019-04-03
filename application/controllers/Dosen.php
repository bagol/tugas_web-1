<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['title'] = 'Form Dosen';
        $this->load->view('templates/Header', $data);
        $this->load->view('dosen/index');
        $this ->load-> view('templates/Footer');
    }

    public function tampil_dosen(){
    
    }
}