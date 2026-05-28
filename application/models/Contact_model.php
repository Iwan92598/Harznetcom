<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function simpan_pesan($data) {
        return $this->db->insert('kontak', $data); // Simpan ke tabel `kontak`
    }
    
    public function count_all() {
    return $this->db->count_all('contact');
    }
    
}
