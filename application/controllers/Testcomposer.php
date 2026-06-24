<?php
class Testcomposer extends CI_Controller
{
    public function index()
    {
        echo class_exists('RouterOS\Client')
            ? 'RouterOS Client ditemukan'
            : 'RouterOS Client tidak ditemukan';
    }
}