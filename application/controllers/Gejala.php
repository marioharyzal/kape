<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_gejala');
    }

    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['gejala'] = $this->Model_gejala->get()->result();
        $data['pageContent'] = $this->load->view('gejala', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_gejala' => $this->input->post('id_gejala'),
                'gejala' => $this->input->post('gejala'),
                'bagian' => $this->input->post('bagian'),
            ];

            $query = $this->Model_gejala->insert($data);

            if ($query) $message = array('status' => true, 'message' => 'Gejala telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Gejala gagal ditambahkan');
        
            $this->session->set_flashdata('message', $message);

            redirect('gejala', 'refresh');
        }

        $data['pageTitle'] = 'Tambah Data Gejala';   
        $data['pageContent'] = $this->load->view('gejala_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $data = [
                'id_gejala' => $this->input->post('id_gejala'),
                'gejala' => $this->input->post('gejala'),
                'bagian' => $this->input->post('bagian'),
            ];

            $gejala = $this->Model_gejala->find($id)->row();
            
            if (!$gejala) show_404();

            $query = $this->Model_gejala->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Gejala telah diubah');
            else $message = array('status' => true, 'message' => 'Gejala gagal diubah');
        
            $this->session->set_flashdata('message', $message);

            redirect('gejala', 'refresh');
        }

        $data['pageTitle'] = 'Ubah Data Gejala';   
        $data['gejala'] = $this->Model_gejala->find($id)->row();
        $data['pageContent'] = $this->load->view('gejala_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $gejala = $this->Model_gejala->find($id)->row();
            
        if (!$gejala) show_404();
            
        $query = $this->Model_gejala->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Gejala telah dihapus');
        else $message = array('status' => true, 'message' => 'Gejala gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('gejala', 'refresh');
    }

}