<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

  public function get_all()
  {
    return $this->db->order_by('created_at', 'DESC')->get('blog')->result();
  }

  public function insert($data)
  {
    return $this->db->insert('blog', $data);
  }
}
