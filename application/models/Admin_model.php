<?php
class Admin_model extends CI_Model {

    public function get_by_username($username) {
        return $this->db->get_where('admin', ['username' => $username])->row_array();
    }

    public function insert($data) {
        return $this->db->insert('admin', $data);
    }
}
