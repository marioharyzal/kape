<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_penyakit');
    }

    public function index()
    {
        $data['pageTitle'] = 'Kambing Anglo Nubian (Capra aegagrus hircus)';
        $data['penyakit'] = $this->Model_penyakit->get()->result();
        $data['pageContent'] = $this->load->view('penyakit', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10240;
            $config['file_name'] = 'img_' .time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_penyakit')) {
               $data = [
                    'id_penyakit' => $this->input->post('id_penyakit'),
                    'nm_penyakit' => $this->input->post('nama_penyakit'),
                    'penyebab' => $this->input->post('penyebab'),
                    'daur_penyakit' => $this->input->post('daur_penyakit'),
                    'faktor' => $this->input->post('faktor'),
                ];
            } else {
                $data = [
                    'id_penyakit' => $this->input->post('id_penyakit'),
                    'nm_penyakit' => $this->input->post('nama_penyakit'),
                    'penyebab' => $this->input->post('penyebab'),
                    'daur_penyakit' => $this->input->post('daur_penyakit'),
                    'faktor' => $this->input->post('faktor'),
                    'gambar_penyakit' => $this->upload->data('file_name'),
                ];
            }

            $query = $this->Model_penyakit->insert($data);

            if ($query) $message = array('status' => true, 'message' => 'Penyakit telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Penyakit gagal ditambahkan');
        
            $this->session->set_flashdata('message', $message);

            redirect('penyakit', 'refresh');
        }

        $data['pageTitle'] = 'Tambah Data Penyakit';   
        $data['pageContent'] = $this->load->view('penyakit_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 10240;
            $config['file_name'] = 'img_' .time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar_penyakit')) {
               $data = [
                    'id_penyakit' => $this->input->post('id_penyakit'),
                    'nm_penyakit' => $this->input->post('nama_penyakit'),
                    'penyebab' => $this->input->post('penyebab'),
                    'daur_penyakit' => $this->input->post('daur_penyakit'),
                    'faktor' => $this->input->post('faktor'),
                ];
            } else {
                $data = [
                    'id_penyakit' => $this->input->post('id_penyakit'),
                    'nm_penyakit' => $this->input->post('nama_penyakit'),
                    'penyebab' => $this->input->post('penyebab'),
                    'daur_penyakit' => $this->input->post('daur_penyakit'),
                    'faktor' => $this->input->post('faktor'),
                    'gambar_penyakit' => $this->upload->data('file_name'),
                ];
            }

            $penyakit = $this->Model_penyakit->find($id)->row();
            
            if (!$penyakit) show_404();

            $query = $this->Model_penyakit->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Penyakit telah diubah');
            else $message = array('status' => true, 'message' => 'Penyakit gagal diubah');
        
            $this->session->set_flashdata('message', $message);

            redirect('penyakit', 'refresh');
        }

        $data['pageTitle'] = 'Ubah Data Penyakit';   
        $data['penyakit'] = $this->Model_penyakit->find($id)->row();
        $data['pageContent'] = $this->load->view('penyakit_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $penyakit = $this->Model_penyakit->find($id)->row();
            
        if (!$penyakit) show_404();
            
        $query = $this->Model_penyakit->delete($id);
    
        if ($query) $message = array('status' => true, 'message' => 'Penyakit telah dihapus');
        else $message = array('status' => true, 'message' => 'Penyakit gagal dihapus');
    
        $this->session->set_flashdata('message', $message);

        redirect('penyakit', 'refresh');
    }
}