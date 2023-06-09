<?php
class Model_users extends CI_Model {

    public $table = 'tb_admin';

    public function cekAkun($username, $password)
    {
        // Get data user yang mempunyai username == $username dan active == y
        $this->db->where('username', $username);
                
        // Jalankan query
        $query = $this->db->get($this->table)->row();
        
        // Jika query gagal atau tidak menemukan username yang sesuai 
        // maka return false
        if (!$query) return false;
                
        // Ambil data password dari database
        $hash = $query->password;
        
        // Jika $hash tidak sama dengan $password maka return false
        if ($password != $hash) return false;

        // Jika username dan password benar maka return data user
        return $query;        
    }

}