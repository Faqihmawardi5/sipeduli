<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function login() {
        if ($this->session->userdata('admin')) {
            redirect('dashboard');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->Admin_model->get_by_username($username);

            if ($admin && password_verify($password, $admin['password'])) {
                $this->session->set_userdata('admin', $admin);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }

    public function register() {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama'     => $this->input->post('nama')
            ];

            $this->Admin_model->insert($data);
            $this->session->set_flashdata('success', 'Registrasi berhasil. Silakan login.');
            redirect('auth/login');
        }

        $this->load->view('auth/register');
    }

    public function logout() {
        $this->session->unset_userdata('admin');
        redirect('auth/login');
    }
}
