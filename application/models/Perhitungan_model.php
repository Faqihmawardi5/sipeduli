<?php
class Perhitungan_model extends CI_Model {

    public function proses_saw() {
        $alternatif = $this->db->get('alternatif')->result();
        $kriteria = $this->db->get('kriteria')->result();

        // ambil bobot kriteria
        $bobot = [];
        foreach ($kriteria as $k) {
            $bobot[$k->id] = $k->bobot;
        }

        // ambil semua nilai penilaian
        $penilaian = $this->db->get('penilaian')->result();
        $matrix = [];

        foreach ($penilaian as $p) {
            $sub = $this->db->get_where('subkriteria', ['id' => $p->id_subkriteria])->row();
            $kriteria_id = $sub->id_kriteria;
            $matrix[$p->id_alternatif][$kriteria_id] = $p->nilai;
        }

        // normalisasi
        $normal = [];
        foreach ($kriteria as $k) {
            $nilai_k = array_column(array_map(function($a) use ($k) {
                return isset($a[$k->id]) ? $a[$k->id] : 0;
            }, $matrix), null);

            $max = max($nilai_k);

            foreach ($matrix as $alt_id => $nilai) {
                $normal[$alt_id][$k->id] = isset($nilai[$k->id]) ? ($nilai[$k->id] / $max) : 0;
            }
        }

        // hitung skor akhir
        $hasil = [];
        foreach ($alternatif as $alt) {
            $total = 0;
            foreach ($kriteria as $k) {
                $total += ($normal[$alt->id][$k->id] ?? 0) * $bobot[$k->id];
            }
            $hasil[] = [
                'id_alternatif' => $alt->id,
                'nama_alternatif' => $alt->nama_alternatif,
                'skor' => round($total, 4)
            ];
        }

        // urutkan hasil
        usort($hasil, fn($a, $b) => $b['skor'] <=> $a['skor']);

        // klasifikasi
        $total = count($hasil);
        $batas1 = ceil($total / 3);
        $batas2 = ceil(2 * $total / 3);

        foreach ($hasil as $i => &$row) {
            if ($i < $batas1) $row['klasifikasi'] = 'Jangka Pendek';
            elseif ($i < $batas2) $row['klasifikasi'] = 'Jangka Menengah';
            else $row['klasifikasi'] = 'Jangka Panjang';
        }

        return $hasil;
    }

    public function count_all(){
        return $this->db->count_all('perhitungan');
        }

        public function klasifikasi_summary() {
            $result = $this->proses_saw();
            $summary = [
                'Jangka Pendek' => 0,
                'Jangka Menengah' => 0,
                'Jangka Panjang' => 0
            ];
        
            foreach ($result as $item) {
                if (isset($item['klasifikasi'])) {
                    $summary[$item['klasifikasi']]++;
                }
            }
        
            return $summary;
        }
        
}
