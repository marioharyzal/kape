<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_gejala');
    }

    public function index()
    {
        $data['pageTitle'] = 'Perhitungan Certainty Factor';
    	$data['gejala'] = $this->Model_gejala->get()->result();
        $data['pageContent'] = $this->load->view('diagnosa', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hitung()
    {
    	// var_dump($this->input->post('gejala'));
    	// die();

    	// $data['pageTitle'] = 'Diagnosa';
    	// $data['gejalaSelected'] = $this->Model_gejala->get()->result();
     //    $data['pageContent'] = $this->load->view('diagnosa_hitung', $data, TRUE);

     //    $this->load->view('layouts/app', $data);

    	$idx = $this->input->post('gejala');
        if($idx == NULL){
            $message = array('status' => false, 'message' => 'Gejala belum dipilih!');
            
            $this->session->set_flashdata('message', $message);

            redirect('diagnosa', 'refresh');
        } else if (count($idx) <= 1) {
            $message = array('status' => false, 'message' => 'Minimal 2 gejala dipilih!');
            
            $this->session->set_flashdata('message', $message);

            redirect('diagnosa', 'refresh');
         }else{
    	$x=0;
    	$str="";
    	foreach($idx as $a){
    		if($x==0){
    			$str.= "tb_gejala.id_gejala = '".$idx[$x]."'";
    		}else{
    			$str.= " OR tb_gejala.id_gejala = '".$idx[$x]."'";
    		}
    		$x++;
    	}
    	//$str;
    	$query = $this->db->query('SELECT * FROM tb_gejala JOIN tb_basis_pengetahuan ON tb_gejala.id_gejala=tb_basis_pengetahuan.id_gejala JOIN tb_penyakit ON tb_penyakit.id_penyakit=tb_basis_pengetahuan.id_penyakit where '.$str)->result();
        $query2 = $this->db->query('SELECT * FROM tb_gejala JOIN tb_basis_pengetahuan ON tb_gejala.id_gejala=tb_basis_pengetahuan.id_gejala JOIN tb_penyakit ON tb_penyakit.id_penyakit=tb_basis_pengetahuan.id_penyakit where '.$str.' group by tb_gejala.id_gejala order by tb_basis_pengetahuan.id_penyakit')->result_array();
        $data=array(
            'data'=>$query,
            'gejala' => $this->db->group_by('id_gejala')->get_where('tb_gejala',$str)->result(),
            'sort_by' => $query2,
        );

        $data['pageTitle'] = 'Hasil Diagnosa';
        $data['pageContent'] = $this->load->view('diagnosa_hitung_cf', $data, TRUE);

    	$this->load->view('layouts/app', $data);
    }
}
}