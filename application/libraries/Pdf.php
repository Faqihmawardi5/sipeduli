<?php
require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf {
    protected $dompdf;

    public function __construct() {
        $options = new Options();
        $options->set('isRemoteEnabled', true); // agar logo bisa tampil

        $this->dompdf = new Dompdf($options);
    }

    public function generate($html, $filename = '', $paper = 'A4', $orientation = 'portrait') {
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper($paper, $orientation);
        $this->dompdf->render();
        $this->dompdf->stream($filename, ["Attachment" => false]);
    }
}
