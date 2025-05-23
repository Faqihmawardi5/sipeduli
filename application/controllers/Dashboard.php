<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('admin')) {
            redirect('auth/login');
        }
        $this->load->model('Kriteria_model');
        $this->load->model('Subkriteria_model');
        $this->load->model('Alternatif_model');
        $this->load->model('Penilaian_model');
        $this->load->model('Perhitungan_model');
    }

    public function index() {
        // Data untuk Primary Card
        $data['total_kriteria'] = $this->Kriteria_model->count_all();
        $data['total_subkriteria'] = $this->Subkriteria_model->count_all();
        $data['total_alternatif'] = $this->Alternatif_model->count_all();
        $data['total_penilaian'] = $this->Penilaian_model->count_all();
        $data['total_terhitung'] = count($this->Perhitungan_model->proses_saw());

        // Data untuk Chart
        $klasifikasi = $this->Perhitungan_model->klasifikasi_summary();
        $data['jumlah_pendek'] = $klasifikasi['Jangka Pendek'] ?? 0;
        $data['jumlah_menengah'] = $klasifikasi['Jangka Menengah'] ?? 0;
        $data['jumlah_panjang'] = $klasifikasi['Jangka Panjang'] ?? 0;

        $this->load->view('layout/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('layout/footer');
    }
}
