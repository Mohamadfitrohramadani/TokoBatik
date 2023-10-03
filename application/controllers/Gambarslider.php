<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gambarslider extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => '', 
            'isi' => 'v_gambarslider', 
        );
        $this->load->view('layout/v_wrapper_backend', $data, FALSE);
        
    }

}

/* End of file Home.php */
