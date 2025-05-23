<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard/index');
        $this->load->view('template/footer');
    }
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in') || $this->session->userdata('role') !== 'user') {
            redirect('auth/login');
        }
    }    
    
}
