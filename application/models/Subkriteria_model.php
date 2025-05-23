<?php
class Subkriteria_model extends CI_Model {

    public function get_all_with_kriteria() {
        $this->db->select('subkriteria.*, kriteria.nama_kriteria');
        $this->db->from('subkriteria');
        $this->db->join('kriteria', 'subkriteria.id_kriteria = kriteria.id');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('subkriteria', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('subkriteria', [
            'id_kriteria' => $data['id_kriteria'],
            'nama_subkriteria' => $data['nama_subkriteria'],
            'nilai' => $data['nilai']
        ]);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('subkriteria', [
            'id_kriteria' => $data['id_kriteria'],
            'nama_subkriteria' => $data['nama_subkriteria'],
            'nilai' => $data['nilai']
        ]);
    }

    public function delete($id) {
        $this->db->delete('subkriteria', ['id' => $id]);
    }

    public function count_all() {
        return $this->db->count_all('subkriteria');
    }
    
}
