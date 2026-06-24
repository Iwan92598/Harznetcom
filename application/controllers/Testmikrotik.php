<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testmikrotik extends CI_Controller
{
    public function index()
    {
        $this->load->library('mikrotik');

        $data = $this->mikrotik->get_identity();

        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}