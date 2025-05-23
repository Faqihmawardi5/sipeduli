<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Penilaian_model');
        $this->load->model('Alternatif_model');
        $this->load->model('Kriteria_model');
        $this->load->model('Subkriteria_model');
    }

    public function index() {
        $data['alternatif'] = $this->Alternatif_model->get_all();
        $data['kriteria'] = $this->Kriteria_model->get_all_with_sub();
        $data['penilaian'] = $this->Penilaian_model->get_penilaian_matrix();

        $this->load->view('layout/header');
        $this->load->view('penilaian/index', $data);
        $this->load->view('layout/footer');
    }

    public function simpan() {
        $post = $this->input->post();
        $this->Penilaian_model->simpan($post);
        redirect('penilaian');
    }
}
