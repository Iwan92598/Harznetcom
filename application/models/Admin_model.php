<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    private $table = 'admin';

    public function get_by_username($username) {
        return $this->db->get_where($this->table, ['username' => $username])->row();
    }
    
    public function count_all() {
    return $this->db->count_all('admin');
    }

    public function get_all() {
    return $this->db->order_by('created_at', 'DESC')->get('contact')->result();
    }

    
}
