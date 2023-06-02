<?php
class Model_penanganan extends CI_Model {

    public $table = 'tb_penanganan';

    public function get()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tb_penyakit', 'tb_penyakit.id_penyakit = tb_penanganan.id_penyakit');
        $this->db->join('tb_solusi', 'tb_solusi.id_solusi = tb_penanganan.id_solusi');
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
        $this->db->where('id_penanganan', $id);
        $query = $this->db->get($this->table);

        return $query;
    }

    public function update($id, $data)
    {
        $this->db->where('id_penanganan', $id);
        $query = $this->db->update($this->table, $data);

        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->where('id_penanganan', $id)->delete($this->table);
        return $query;
    }

    public function solusi($idPenyakit)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tb_solusi', 'tb_solusi.id_solusi = tb_penanganan.id_solusi');
        $this->db->where('id_penyakit', $idPenyakit);
        $query = $this->db->get();

        return $query;
    }
}