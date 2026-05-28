<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function index() {
    $this->load->view('layouts/navbar');
    $this->load->view('layouts/header');
    $this->load->view('pages/beranda');
    $this->load->view('layouts/footer');
    }

  public function tentang() {
    $this->load->view('layouts/navbar');
    $this->load->view('layouts/header');
    $this->load->view('pages/tentang');
    $this->load->view('layouts/footer');
   }
   
     public function kuesioner() {
    $this->load->view('layouts/navbar');
    $this->load->view('layouts/header');
    $this->load->view('pages/kuesioner');
    $this->load->view('layouts/footer');
   }
  
public function informasi()
{
    $this->load->view('layouts/navbar');
    $this->load->model('Blog_model');
    $this->load->helper('text'); // ✅ Tambahkan ini

    $data['blog_posts'] = $this->Blog_model->get_all();

    $this->load->view('layouts/header');
    $this->load->view('pages/informasi', $data);
    $this->load->view('layouts/footer');
}




  public function home() {
     $this->load->view('layouts/navbar');
     $this->load->view('layouts/header');
     $this->load->view('layanan/home');
     $this->load->view('layouts/footer');
    }
    
}
