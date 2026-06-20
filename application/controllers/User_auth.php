<?php
class User_auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_user_auth');
    }

    public function login()
    {
        $this->form_validation->set_rules(
        'username',
        'Username',
        'required'
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required'
        );
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('users/login_users');
        }
        else
        {
            $auth = $this->Model_user_auth->cek_login();

            if(!$auth)
            {
                $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger">
                    Username atau Password salah!
                </div>'
            );
                redirect('user_auth/login');
            }

            $this->session->set_userdata([
                'id_user'     => $auth->id,
                'customer_id' => $auth->kode_pelanggan,
                'nama'        => $auth->nama_lengkap,
                'username'    => $auth->username,
                'level'       => 'pelanggan'
            ]);

            redirect('users');
        }
    }

        public function logout()
            {
                $this->session->unset_userdata('id_user');
                $this->session->unset_userdata('customer_id');
                $this->session->unset_userdata('nama');
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('level');

                redirect('user_auth/login');
            }
}


?>