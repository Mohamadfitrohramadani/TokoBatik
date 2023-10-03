<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => '', 
            'isi' => 'v_galeri', 
        );
        $this->load->view('layout/v_wrapper_khusus', $data, FALSE);
        
    }

}

/* End of file Home.php */
