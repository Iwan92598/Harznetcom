<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Upload_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $data['uploads'] = $this->Upload_model->get_all();
        $this->load->view('admin/upload', $data);
    }

    public function do_upload() {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $data['error'] = $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();
            $this->Upload_model->save([
                'title' => $this->input->post('title'),
                'filename' => $upload_data['file_name']
            ]);
            $data['success'] = "Gambar berhasil diunggah!";
        }

        $data['uploads'] = $this->Upload_model->get_all();
        $this->load->view('admin/upload', $data);
    }
}
