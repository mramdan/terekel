<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
        $this->load->model('Dashboard_model', 'dashboard_m');
        $this->user = $this->ion_auth->user()->row();
    }

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
