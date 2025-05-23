<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Perhitungan_model');
        $this->load->model('Kriteria_model');
        $this->load->model('Alternatif_model');
    }

    public function index() {
        $data['hasil'] = $this->Perhitungan_model->proses_saw();
        $this->load->view('layout/header');
        $this->load->view('perhitungan/index', $data);
        $this->load->view('layout/footer');
    }

    public function cetak() {
        $data['hasil'] = $this->Perhitungan_model->proses_saw();
        $this->load->view('perhitungan/cetak', $data);
    }
    

    public function export_pdf() {
        $this->load->library('pdf'); // wrapper dompdf
        $data['hasil'] = $this->Perhitungan_model->proses_saw();
        
        $html = $this->load->view('perhitungan/pdf', $data, true);

        $html = $this->load->view('perhitungan/pdf', $data, true);
        $this->pdf->generate($html, 'laporan-perhitungan');

        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("laporan_saw.pdf", array("Attachment" => false));
    }

}
