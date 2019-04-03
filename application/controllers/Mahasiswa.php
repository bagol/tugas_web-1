<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_Model');
    }

    public function index(){
        $data['title'] = 'Form Mahasiswa';
        $this->load->view('templates/Header', $data);
        $this->load->view('mahasiswa/index');
        $this ->load-> view('templates/Footer');
    }
    public function tambah_mhs(){
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'semester' => $this->input->post('semester'),
            'jurusan' => $this->input->post('jurusan'),
            'alamat' => $this->input->post('alamat')
        );
        if($this->Mahasiswa_Model->tambah_mhs($data)){
            $this->session->set_flashdata('pesan_berhasil','Selamat, berhasil menambahkan data');
        } else {
            $this->session->set_flashdata('pesan_gagal', 'Oops, Data gagal ditambahkan');
        }
    }
}