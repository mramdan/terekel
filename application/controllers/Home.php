<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $data = [
            'judul' => 'Website Terekel Nekad',
        ];

        $this->load->view('_template/public/header', $data);
        $this->load->view('_template/public/menubar');
        $this->load->view('index');
        $this->load->view('_template/public/footer');
    }
}
