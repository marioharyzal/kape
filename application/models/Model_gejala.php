<?php
class Model_gejala extends CI_Model {

    public $table = 'tb_gejala';

    public function get()
    {
    	return $this->db->get($this->table);
    }

    public function count()
    {
        return $this->db->count_all_results($this->table);
    }

    public function insert($data)
    {
    	$query = $this->db->insert($this->table, $data);
        return $query;
    }

    public function find($id)
    {
        $this->db->where('id_gejala', $id);
        $query = $this->db->get($this->table);

        return $query;
    }

    public function update($id, $data)
    {
        $this->db->where('id_gejala', $id);
        $query = $this->db->update($this->table, $data);

        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->where('id_gejala', $id)->delete($this->table);
        return $query;
    }

    public function getWhere($bagian)
    {
        $this->db->where('bagian', $bagian);
        $query = $this->db->get($this->table);

        return $query;
    }
}