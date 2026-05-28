<?php

class Dashboard_admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau Password Anda Belum Login!
            <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('templates/footer');
    }
}