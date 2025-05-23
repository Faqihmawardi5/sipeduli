<?php
class Alternatif_model extends CI_Model {

    public function get_all() {
        return $this->db->get('alternatif')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('alternatif', ['id' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('alternatif', [
            'nama_alternatif' => $data['nama_alternatif']
        ]);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('alternatif', [
            'nama_alternatif' => $data['nama_alternatif']
        ]);
    }

    public function delete($id) {
        $this->db->delete('alternatif', ['id' => $id]);
    }

    public function count_all() {
        return $this->db->count_all('alternatif');
    }    

}
