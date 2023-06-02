<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
    public function cekLogin()
    {
        if (!$this->session->userdata('username')) {
        	redirect('auth/login');
        }
    }

    public function getUserData()
    {
        // Ambil semua data session
        $userData = $this->session->userdata();
    
        // Return userdata
        return $userData;
    }
}