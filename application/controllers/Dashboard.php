<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();

        $this->load->model('Model_penyakit');
        $this->load->model('Model_gejala');
        $this->load->model('Model_solusi');
        $this->load->model('Model_data_hasil_diagnosis');
    }

    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        $data['jumlahPenyakit'] = $this->Model_penyakit->count();
        $data['jumlahGejala'] = $this->Model_gejala->count();
        $data['jumlahSolusi'] = $this->Model_solusi->count();
        $data['totalDiagnosa'] = $this->Model_data_hasil_diagnosis->count();
        $data['pageContent'] = $this->load->view('dashboard', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }
}