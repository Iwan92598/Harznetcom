<?php
class Model_user_auth extends CI_Model {

    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = ($this->input->post('password'));

        return $this->db
            ->where('username', $username)
            ->where('password', $password)
            ->get('users')
            ->row();
    }
}
?>