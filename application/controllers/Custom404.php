<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {

    public function index()
    {
        $this->output->set_status_header('404');
        $data['title'] = 'Halaman Tidak Ditemukan';

        $this->load->view('layouts/navbar');
        $this->load->view('layouts/header');
        $this->load->view('error_404', $data);
        $this->load->view('layouts/footer');

    }
}
