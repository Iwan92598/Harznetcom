<?php
class Layanan extends CI_Controller {

    public function home() {
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/header');
        $this->load->view('layanan/home');
        $this->load->view('layouts/footer');
    }

    public function corporate() {
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/header');
        $this->load->view('layanan/corporate');
        $this->load->view('layouts/footer');
    }

    public function partner() {
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/header');
        $this->load->view('layanan/partner');
        $this->load->view('layouts/footer');
    }

    public function manage_service() {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layanan/manage_service');
        $this->load->view('layouts/footer');
    }

    public function software() {
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/header');
        $this->load->view('layanan/software');
        $this->load->view('layouts/footer');
    }
}
