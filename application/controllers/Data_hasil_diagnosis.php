<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_hasil_diagnosis extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_data_hasil_diagnosis');
    }

    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['data_hasil_diagnosis'] = $this->Model_data_hasil_diagnosis->get_detail()->result();
        $data['total'] = $this->Model_data_hasil_diagnosis->total()->result();
        $data['pageContent'] = $this->load->view('data_hasil_diagnosis', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }
    public function detail($id_hasil=null)
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['data_hasil_diagnosis'] = $this->Model_data_hasil_diagnosis->get_where_detail($id_hasil)->row();
        $data['gejala'] = $this->db->join('tb_gejala','tb_gejala.id_gejala=tb_diagnosis.id_gejala')->get_where('tb_diagnosis',['id_hasil'=>$id_hasil])->result();
        $data['total'] = $this->Model_data_hasil_diagnosis->total()->result();
        $data['pageContent'] = $this->load->view('data_hasil_diagnosis_detail', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $gejala = $this->Model_gejala->find($id)->row();
            
        if (!$gejala) show_404();
            
        $query = $this->Model_gejala->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Hasil Diagnosis telah dihapus');
        else $message = array('status' => true, 'message' => 'Hasil gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('gejala', 'refresh');
    }
}