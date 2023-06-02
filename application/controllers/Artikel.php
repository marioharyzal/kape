<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_artikel');
    }
    public function index()
    {
        $data['pageTitle'] = 'Master Artikel';
        $data['artikel'] = $this->Model_artikel->get()->result();
        $data['pageContent'] = $this->load->view('artikel', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            $data = [
                'judul_artikel' => $this->input->post('judul_artikel'),
                'deskripsi_artikel' => $this->input->post('deskripsi_artikel'),
                'sumber_artikel' => $this->input->post('sumber_artikel'),
            ];

            $query = $this->Model_artikel->add($data);

            if ($query) $message = array('status' => true, 'message' => 'Artikel telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Artikel gagal ditambahkan');

            $this->session->set_flashdata('message', $message);

            redirect('artikel', 'refresh');
        }
        $data['pageTitle'] = 'Tambah Data Artikel';
        $data['pageContent'] = $this->load->view('artikel_tambah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function ubah($id)
    {
        if ($this->input->post('submit')) {
            $data = [
                'judul_artikel' => $this->input->post('judul_artikel'),
                'deskripsi_artikel' => $this->input->post('deskripsi_artikel'),
                'sumber_artikel' => $this->input->post('sumber_artikel'),
            ];

            $artikel = $this->Model_artikel->find($id)->row();

            if (!$artikel) show_404();

            $query = $this->Model_artikel->update($id, $data);

            if ($query) $message = array('status' => true, 'message' => 'Artikel telah diubah');
            else $message = array('status' => true, 'message' => 'Artikel gagal diubah');

            $this->session->set_flashdata('message', $message);

            redirect('artikel', 'refresh');
        }
        $data['pageTitle'] = 'Ubah Data Artikel';
        $data['artikel'] = $this->Model_artikel->find($id)->row();
        $data['pageContent'] = $this->load->view('artikel_ubah', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }

    public function hapus($id)
    {
        $artikel = $this->Model_artikel->find($id)->row();

        if (!$artikel) show_404();

        $query = $this->Model_artikel->delete($id);

        if ($query) $message = array('status' => true, 'message' => 'artikel telah dihapus');
        else $message = array('status' => true, 'message' => 'artikel gagal dihapus');

        $this->session->set_flashdata('message', $message);

        redirect('artikel', 'refresh');
    }
}
