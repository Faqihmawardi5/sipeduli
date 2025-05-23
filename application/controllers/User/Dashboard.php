<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// application/controllers/User/Dashboard.php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'user') {
            redirect('auth/login');
        }
    }

    public function index() {
        $this->load->view('user/dashboard');
    }
}
