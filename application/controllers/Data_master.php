<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_master extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
    }

    public function index()
   	{
   		$data['pageTitle'] = 'Sub Menu Data Master';
   		$data['pageContent'] = $this->load->view('data_master', $data, TRUE);

        $this->load->view('layouts/app', $data);
    }
}