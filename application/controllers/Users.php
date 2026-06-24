<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Cek apakah pelanggan sudah login
        if (!$this->session->userdata('id_user')) {

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Anda harus login terlebih dahulu!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>'
            );

            redirect('user_auth/login');
        }

        $this->load->helper(['url', 'form']);
        $this->load->library('form_validation');
    }

    // Dashboard pelanggan
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = 'users/dashboard';
        $this->load->view('users/template',$data);
    }
        public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = 'users/dashboard';
        $this->load->view('users/template',$data);
    }

    // Profil pelanggan
    public function profile()
    {
        $data['title'] = 'Profile';
        $data['content'] = 'users/profile';
        $this->load->view('users/template',$data);
    }

    // Paket layanan
public function paket()
{
    $this->load->model('User_model');

    $data['paket_layanan'] = $this->User_model->get_all();

    $data['user'] = $this->db
        ->where('id', $this->session->userdata('id_user'))
        ->get('users')
        ->row();
        

    $data['title'] = 'Paket';
    $data['content'] = 'users/paket';

    $this->load->view('users/template', $data);
}

    // Tagihan
    public function tagihan()
    {
        $data['title'] = 'Tagihan';
        $data['content'] = 'users/tagihan';
        $this->load->view('users/template',$data);
    }

    // Riwayat pembayaran
    public function pengumuman()
    {
        $data['title'] = 'Pengumuman';
        $data['content'] = 'users/pengumuman';
        $this->load->view('users/template',$data);
    }

    // Tiket gangguan
    public function tiket()
    {
        $this->load->model('Ticket_model');

        // $id_user = $this->session->userdata('id_user');

        // $data['tickets'] = $this->Ticket_model->getByUser($id_user);

        $data['title'] = 'Tiket';
        $data['content'] = 'users/tiket';

        $this->load->view('users/template', $data);
    }
}
