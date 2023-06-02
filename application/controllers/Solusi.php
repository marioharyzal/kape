<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Solusi extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_solusi');
    }

    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['solusi'] = $this->Model_solusi->get()->result();
        $data['pageContent'] = $this->load->view('solusi', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_solusi' => $this->input->post('id_solusi'),
                'solusi' => $this->input->post('solusi'),
                ];

            $query = $this->Model_solusi->insert($data);

            if ($query) $message = array('status' => true, 'message' => 'Solusi telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Solusi gagal ditambahkan');
        
            $this->session->set_flashdata('message', $message);

            redirect('solusi', 'refresh');
        }

        $data['pageTitle'] = 'Tambah Data Solusi';   
        $data['pageContent'] = $this->load->view('solusi_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_solusi' => $this->input->post('id_solusi'),
                'solusi' => $this->input->post('solusi'),
            ];

            $solusi = $this->Model_solusi->find($id)->row();
            
            if (!$solusi) show_404();

            $query = $this->Model_solusi->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Solusi telah diubah');
            else $message = array('status' => true, 'message' => 'Solusi gagal diubah');
        
            $this->session->set_flashdata('message', $message);

            redirect('solusi', 'refresh');
        }

        $data['pageTitle'] = 'Ubah Data Solusi';   
        $data['solusi'] = $this->Model_solusi->find($id)->row();
        $data['pageContent'] = $this->load->view('solusi_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $solusi = $this->Model_solusi->find($id)->row();
            
        if (!$solusi) show_404();
            
        $query = $this->Model_solusi->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Solusi telah dihapus');
        else $message = array('status' => true, 'message' => 'Solusi gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('solusi', 'refresh');
    }
}