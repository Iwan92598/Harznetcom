<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Paket_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('paket_layanan')->result();
    }

    public function get_fitur($id_paket)
    {
        return $this->db
            ->where('id_paket', $id_paket)
            ->get('paket_fitur')
            ->result();
    }
}