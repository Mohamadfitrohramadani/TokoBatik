<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => '', 
            'isi' => 'v_contact', 
        );
        $this->load->view('layout/v_wrapper_frontend2', $data, FALSE);
        
    }

}

/* End of file Home.php */
