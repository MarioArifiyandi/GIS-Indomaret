<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'Geo-Mart',
            'content' => 'peta_leaflet'
        );
        $this->load->view('layout/viewunion', $data, FALSE);
    }
}
/* End of file Home.php */