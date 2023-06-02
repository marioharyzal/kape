<?php
class Model_data_hasil_diagnosis extends CI_Model {

    public $table = 'tb_hasil';

    public function get()
    {
    	return $this->db->get($this->table);
    }
    public function get_detail()
    {   
        
        $this->db->join('tb_penyakit','tb_penyakit.id_penyakit=tb_hasil.id_penyakit');
        return $this->db->get($this->table);
    }
     public function get_where_detail($id_hasil)
    {       
        $this->db->join('tb_penyakit','tb_penyakit.id_penyakit=tb_hasil.id_penyakit');
        return $this->db->get_where($this->table,['id_hasil'=>$id_hasil]);
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
    public function total(){
        return $this->db->query('SELECT *, count(id_hasil) as jumlah FROM `tb_hasil` join tb_penyakit on tb_penyakit.id_penyakit = tb_hasil.id_penyakit GROUP BY tb_hasil.id_penyakit');
    } 
}