<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subkriteria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Subkriteria_model');
        $this->load->model('Kriteria_model');
    }

    public function index() {
        $data['subkriteria'] = $this->Subkriteria_model->get_all_with_kriteria();
        $this->load->view('layout/header');
        $this->load->view('subkriteria/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah() {
        $data['kriteria'] = $this->Kriteria_model->get_all();
        if ($this->input->post()) {
            $this->Subkriteria_model->insert($this->input->post());
            redirect('subkriteria');
        }
        $this->load->view('layout/header');
        $this->load->view('subkriteria/tambah', $data);
        $this->load->view('layout/footer');
    }

    public function edit($id) {
        $data['kriteria'] = $this->Kriteria_model->get_all();
        $data['sub'] = $this->Subkriteria_model->get_by_id($id);
        if ($this->input->post()) {
            $this->Subkriteria_model->update($id, $this->input->post());
            redirect('subkriteria');
        }
        $this->load->view('layout/header');
        $this->load->view('subkriteria/edit', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id) {
        $this->Subkriteria_model->delete($id);
        redirect('subkriteria');
    }
}
