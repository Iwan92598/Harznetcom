<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    // Cek jika user bukan admin (role_id != 1)
    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata('pesan', 
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Anda belum login sebagai admin!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
      );
      redirect('auth/login');
    }

    $this->load->model('Blog_model');
    $this->load->helper(['url', 'form', 'text']);
    $this->load->library('form_validation');
  }

  public function index()
{
  $this->load->view('admin/navbar');
  $this->load->view('admin/dashboard_admin'); // ✅ Tampilkan view dashboard_admin
  $this->load->view('templates/footer');
}


  public function tambah_blog()
  {
    if ($this->input->post()) {
      $this->form_validation->set_rules('judul', 'Judul', 'required');
      $this->form_validation->set_rules('isi', 'Isi', 'required');

      if ($this->form_validation->run() == TRUE) {
        $judul = $this->input->post('judul');
        $isi   = $this->input->post('isi');
        $slug  = url_title($judul, 'dash', TRUE);

        $data = ['judul' => $judul, 'slug' => $slug, 'isi' => $isi];
        $this->Blog_model->insert($data);
        redirect('admin/tambah_blog?success=1');
      }
    }

    $this->load->view('admin/navbar');
    $this->load->view('admin/tambah_blog');
    $this->load->view('templates/footer');
  }

  public function report()
  {
    $this->load->view('admin/navbar');
    $this->load->view('admin/report');
    $this->load->view('templates/footer');
  }

  public function profile()
  {
    $this->load->view('admin/navbar');
    $this->load->view('admin/profile'); // ✅ Sudah diperbaiki
    $this->load->view('templates/footer');
  }
}
