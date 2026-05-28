<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
    }

    public function kirim()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url());
        } else {
            $recaptcha = $this->input->post('g-recaptcha-response');
            $secretKey = '6Ld-WJYrAAAAAJ1ARZf5A5SQXv2bDlwwf48ahIDe';
            $userIP = $this->input->ip_address();

            $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptcha}&remoteip={$userIP}");
            $response = json_decode($verify);

            if (!$response->success) {
                $this->session->set_flashdata('error', 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.');
                redirect(base_url());
                return;
            }

            $data = [
                'nama'    => $this->input->post('nama', TRUE),
                'email'   => $this->input->post('email', TRUE),
                'pesan'   => $this->input->post('pesan', TRUE),
                'tanggal' => date('Y-m-d H:i:s')
            ];

            $this->Contact_model->simpan_pesan($data);
            $this->session->set_flashdata('success', 'Pesan Anda berhasil dikirim.');
            redirect(base_url());
        }
    }
}
