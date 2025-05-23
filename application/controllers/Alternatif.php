<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Alternatif_model');
    }

    public function index() {
        $data['alternatif'] = $this->Alternatif_model->get_all();
        $this->load->view('layout/header');
        $this->load->view('alternatif/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah() {
        if ($this->input->post()) {
            $this->Alternatif_model->insert($this->input->post());
            redirect('alternatif');
        }
        $this->load->view('layout/header');
        $this->load->view('alternatif/tambah');
        $this->load->view('layout/footer');
    }

    public function edit($id) {
        $data['alternatif'] = $this->Alternatif_model->get_by_id($id);
        if ($this->input->post()) {
            $this->Alternatif_model->update($id, $this->input->post());
            redirect('alternatif');
        }
        $this->load->view('layout/header');
        $this->load->view('alternatif/edit', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id) {
        $this->Alternatif_model->delete($id);
        redirect('alternatif');
    }
}
