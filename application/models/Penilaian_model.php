<?php
class Penilaian_model extends CI_Model {

    public function get_penilaian_matrix() {
        $query = $this->db->get('penilaian');
        $result = [];
        foreach ($query->result() as $row) {
            $result[$row->id_alternatif][$row->id_subkriteria] = $row->nilai;
        }
        return $result;
    }

    public function simpan($data) {
        foreach ($data['nilai'] as $id_alternatif => $nilai_sub) {
            foreach ($nilai_sub as $id_sub => $nilai) {
                $cek = $this->db->get_where('penilaian', [
                    'id_alternatif' => $id_alternatif,
                    'id_subkriteria' => $id_sub
                ])->row();

                if ($cek) {
                    $this->db->where('id', $cek->id);
                    $this->db->update('penilaian', ['nilai' => $nilai]);
                } else {
                    $this->db->insert('penilaian', [
                        'id_alternatif' => $id_alternatif,
                        'id_subkriteria' => $id_sub,
                        'nilai' => $nilai
                    ]);
                }
            }
        }
    }

    public function count_all() {
        return $this->db->count_all('penilaian');
    }    
}
