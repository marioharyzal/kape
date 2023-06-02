<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Basis_pengetahuan extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_basis_pengetahuan');
        $this->load->model('Model_penyakit');
        $this->load->model('Model_gejala');
    }
    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['basis_pengetahuan'] = $this->Model_basis_pengetahuan->get()->result();
        $data['pageContent'] = $this->load->view('basis_pengetahuan', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_penyakit' => $this->input->post('id_penyakit'),
                'id_gejala' => $this->input->post('id_gejala'),
                'mb' => $this->input->post('mb'),
                'md' => $this->input->post('md'),
                // 'bel' => $this->input->post('bel'),
                // 'plau' => $this->input->post('plau'),
            ];

            $query = $this->Model_basis_pengetahuan->insert($data);

            if ($query) $message = array('status' => true, 'message' => 'Basis Pengetahuan telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Basis Pengetahuan gagal ditambahkan');
        
            $this->session->set_flashdata('message', $message);

            redirect('basis_pengetahuan', 'refresh');
        }
        $data['penyakit'] = $this->Model_penyakit->get()->result();
        $data['gejala'] = $this->Model_gejala->get()->result();
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';   
        $data['pageContent'] = $this->load->view('basis_pengetahuan_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_penyakit' => $this->input->post('id_penyakit'),
                'id_gejala' => $this->input->post('id_gejala'),
                'mb' => $this->input->post('mb'),
                'md' => $this->input->post('md'),
                // 'bel' => $this->input->post('bel'),
                // 'plau' => $this->input->post('plau'), 
            ];

            $basis_pengetahuan = $this->Model_basis_pengetahuan->find($id)->row();
            
            if (!$basis_pengetahuan) show_404();

            $query = $this->Model_basis_pengetahuan->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Basis Pengetahuan telah diubah');
            else $message = array('status' => true, 'message' => 'Basis Pengetahuan gagal diubah');
        
            $this->session->set_flashdata('message', $message);

            redirect('basis_pengetahuan', 'refresh');
        }
        $data['penyakit'] = $this->Model_penyakit->get()->result();
        $data['gejala'] = $this->Model_gejala->get()->result();
        $data['pageTitle'] = 'Ubah Data Basis Pengetahuan';   
        $data['basis_pengetahuan'] = $this->Model_basis_pengetahuan->find($id)->row();
        $data['pageContent'] = $this->load->view('basis_pengetahuan_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $basis_pengetahuan = $this->Model_basis_pengetahuan->find($id)->row();
            
        if (!$basis_pengetahuan) show_404();
            
        $query = $this->Model_basis_pengetahuan->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Basis Pengetahuan telah dihapus');
        else $message = array('status' => true, 'message' => 'Basis Pengetahuan gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('basis_pengetahuan', 'refresh');
    }
}