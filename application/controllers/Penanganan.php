<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penanganan extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_penanganan');
        $this->load->model('Model_penyakit');
        $this->load->model('Model_solusi');
    }
    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['penanganan'] = $this->Model_penanganan->get()->result();
        $data['pageContent'] = $this->load->view('penanganan', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_penyakit' => $this->input->post('id_penyakit'),
                'id_solusi' => $this->input->post('id_solusi'),
            ];

            $query = $this->Model_penanganan->insert($data);

            if ($query) $message = array('status' => true, 'message' => 'Penanganan telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Penanganan gagal ditambahkan');
        
            $this->session->set_flashdata('message', $message);

            redirect('penanganan', 'refresh');
        }
        $data['penyakit'] = $this->Model_penyakit->get()->result();
        $data['solusi'] = $this->Model_solusi->get()->result();
        $data['pageTitle'] = 'Tambah Data penanganan';   
        $data['pageContent'] = $this->load->view('penanganan_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_penyakit' => $this->input->post('id_penyakit'),
                'id_solusi' => $this->input->post('id_solusi'),
            ];

            $penanganan = $this->Model_penanganan->find($id)->row();
            
            if (!$penanganan) show_404();

            $query = $this->Model_penanganan->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Penanganan telah diubah');
            else $message = array('status' => true, 'message' => 'Penanganan gagal diubah');
        
            $this->session->set_flashdata('message', $message);

            redirect('penanganan', 'refresh');
        }
        $data['penyakit'] = $this->Model_penyakit->get()->result();
        $data['solusi'] = $this->Model_solusi->get()->result();
        $data['pageTitle'] = 'Ubah Data Penanganan';   
        $data['penanganan'] = $this->Model_penanganan->find($id)->row();
        $data['pageContent'] = $this->load->view('penanganan_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $penanganan = $this->Model_penanganan->find($id)->row();
            
        if (!$penanganan) show_404();
            
        $query = $this->Model_penanganan->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Penanganan telah dihapus');
        else $message = array('status' => true, 'message' => 'Penanganan gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('penanganan', 'refresh');
    }
}