<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {

        $data = [
            'judul' => 'Admin Dashborad',
        ];

        $this->load->view('_template/admin/header', $data);
        $this->load->view('_template/admin/navbar');
        $this->load->view('_template/admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('_template/admin/footer');
    }
}
