<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kriteria_model');
    }

    public function index() {
        $data['kriteria'] = $this->Kriteria_model->get_all();
        $this->load->view('layout/header');
        $this->load->view('kriteria/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah() {
        if ($this->input->post()) {
            $this->Kriteria_model->insert($this->input->post());
            redirect('kriteria');
        }
        $this->load->view('layout/header');
        $this->load->view('kriteria/tambah');
        $this->load->view('layout/footer');
    }

    public function edit($id) {
        $data['kriteria'] = $this->Kriteria_model->get_by_id($id);
        if ($this->input->post()) {
            $this->Kriteria_model->update($id, $this->input->post());
            redirect('kriteria');
        }
        $this->load->view('layout/header');
        $this->load->view('kriteria/edit', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id) {
        $this->Kriteria_model->delete($id);
        redirect('kriteria');
    }
}
