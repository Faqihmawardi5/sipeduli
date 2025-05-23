<?php
class Kriteria_model extends CI_Model {

    public function get_all() {
        return $this->db->get('kriteria')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('kriteria', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('kriteria', [
            'nama_kriteria' => $data['nama_kriteria'],
            'bobot' => $data['bobot'],
            'tipe' => $data['tipe']
        ]);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kriteria', [
            'nama_kriteria' => $data['nama_kriteria'],
            'bobot' => $data['bobot'],
            'tipe' => $data['tipe']
        ]);
    }

    public function delete($id) {
        $this->db->delete('kriteria', ['id' => $id]);
    }

    public function get_all_with_sub() {
        $kriteria = $this->db->get('kriteria')->result();
        foreach ($kriteria as $k) {
            $k->subkriteria = $this->db->get_where('subkriteria', ['id_kriteria' => $k->id])->result();
        }
        return $kriteria;
    }

    public function count_all() {
        return $this->db->count_all('kriteria');
    }
    

    
}
