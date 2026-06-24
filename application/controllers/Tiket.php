<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tiket extends CI_Controller
{
    private function generateNoTiket($id_user)
    {
        return date('Ymd')
            . str_pad($id_user, 5, '0', STR_PAD_LEFT)
            . 'G';
    }
}
?> -->