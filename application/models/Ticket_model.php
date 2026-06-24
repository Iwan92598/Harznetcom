<?php

class Ticket_model extends CI_Model
{
    public function getByUser($id_user)
    {
        return $this->db
            ->where('id_user', $id_user)
            ->order_by('updated_at', 'DESC')
            ->get('ticket')
            ->result();
    }
}