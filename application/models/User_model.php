<!-- public function get_all()
{
    return $this->db->get('paket_layanan')->result();
} -->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $table = 'users';

    public function get_by_username($username) {
        return $this->db->get_where($this->table, ['username' => $username])->row();
    }
    
    public function count_all() {
    return $this->db->count_all('users');
    }

    public function get_all() {
        return $this->db->get('paket_layanan')->result();
    }

    public function get_user_by_id($id)
{
    return $this->db
        ->where('id', $id)
        ->get('users')
        ->row();
}

public function getProfile($id_user)
{
    return $this->db
        ->select('
            users.*,
            paket_layanan.nama_paket,
            paket_layanan.kecepatan,
            paket_layanan.harga
        ')
        ->from('users')
        ->join(
            'paket_layanan',
            'paket_layanan.id = users.id_paket',
            'left'
        )
        ->where('users.id', $id_user)
        ->get()
        ->row();
}

    
}
