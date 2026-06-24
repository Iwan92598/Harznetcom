<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use RouterOS\Client;
use RouterOS\Config;
use RouterOS\Query;

class Mikrotik
{
    protected $client;

    public function __construct()
    {
        $config = new Config([
            'host' => '160.19.206.26',
            'user' => 'admin',
            'pass' => '',
            'port' => 897,
        ]);

        $this->client = new Client($config);
    }

    public function get_identity()
    {
        $query = new Query('/system/identity/print');

        return $this->client
            ->query($query)
            ->read();
    }
}