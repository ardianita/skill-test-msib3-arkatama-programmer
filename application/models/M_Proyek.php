<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Proyek extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('tb_user');
        return $query->result_array();
    }

    public function tambahData()
    {
        $name = $this->input->post('name', true);
        $city = $this->input->post('city', true);
        $age = $this->input->post('age', true);

        $data = array(
            'name'      => $name,
            'city'      => $city,
            'age'     => $age,

        );

        $this->db->insert('tb_user', $data);
    }
}
