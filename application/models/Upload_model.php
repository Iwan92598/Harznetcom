<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

    public function save($data) {
        return $this->db->insert('uploads', $data);
    }

    public function get_all() {
        return $this->db->order_by('uploaded_at', 'DESC')->get('uploads')->result();
    }
}
