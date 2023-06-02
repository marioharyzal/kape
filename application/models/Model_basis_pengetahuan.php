<?php
class Model_basis_pengetahuan extends CI_Model {

    public $table = 'tb_basis_pengetahuan';

    public function get()
    {
    	$this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tb_penyakit', 'tb_penyakit.id_penyakit = tb_basis_pengetahuan.id_penyakit');
        $this->db->join('tb_gejala', 'tb_gejala.id_gejala = tb_basis_pengetahuan.id_gejala');
        $query = $this->db->get();

        return $query;
    }

    public function insert($data)
    {
    	$query = $this->db->insert($this->table, $data);
        return $query;
    }
    
    public function find($id)
    {
        $this->db->where('id_basis_pengetahuan', $id);
        $query = $this->db->get($this->table);

        return $query;
    }

    public function update($id, $data)
    {
        $this->db->where('id_basis_pengetahuan', $id);
        $query = $this->db->update($this->table, $data);

        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->where('id_basis_pengetahuan', $id)->delete($this->table);
        return $query;
    }
}