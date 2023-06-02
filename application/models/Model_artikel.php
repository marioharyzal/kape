<?php
class Model_artikel extends CI_Model
{
    public $table = 'tb_artikel';

    public function get()
    {
        return $this->db->get($this->table);
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function find($id)
    {
        $this->db->where('id_artikel', $id);
        $query = $this->db->get($this->table);

        return $query;
    }

    public function update($id, $data)
    {
        $this->db->where('id_artikel', $id);
        $query = $this->db->update($this->table, $data);

        return $query;
    }

    public function delete($id)
    {
        $query = $this->db->where('id_artikel', $id)->delete($this->table);
        return $query;
    }
}
