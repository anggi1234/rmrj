<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table)->result();
    }

    public function get_where($table, $where = [], $no_result = false)
    {
        $query = $this->db->get_where($table, $where);
        if ($no_result) {
            return $query;
        } else {
            if ($query->num_rows() > 1) {
                return $query->result();
            } else {
                return $query->row();
            }
        }
    }
}
