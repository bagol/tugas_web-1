<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller {
    public function index(){
        $data['title'] = 'Form Mata Kuliah';
        $this->load->view('templates/Header', $data);
        $this->load->view('mataKuliah/index');
        $this ->load-> view('templates/Footer');
    }
    public function tampil_matkul(){
        
    }
}