<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function login_user() {
        $this->load->library('form_validation');
        
        // Validasi form fields
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi!!'
        ));
    
        // Mengganti dengan secret key reCAPTCHA Anda
        $recaptchaSecretKey = '6Ldo8WsoAAAAACzgWzDP-gkMrT8F5x1kYkitKOEM';
    
        if ($this->form_validation->run() == TRUE) {
            // Validasi reCAPTCHA
            $recaptchaResponse = $this->input->post('g-recaptcha-response');
    
            // Verifikasi reCAPTCHA
            $recaptchaVerify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaResponse}");
            $recaptchaData = json_decode($recaptchaVerify);
    
            if ($recaptchaData->success) {
                // reCAPTCHA valid, lanjutkan dengan proses login
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user_data = $this->user_login->login($username, $password);
    
                if ($user_data) {
                    // Login berhasil, arahkan ke halaman yang sesuai
                    if ($user_data['level'] == 'admin') {
                        redirect('admin/dashboard');  // Ganti 'admin/dashboard' dengan rute aktual ke dashboard admin
                    } else {
                        redirect('user/dashboard');   // Ganti 'user/dashboard' dengan rute aktual ke dashboard pengguna
                    }
                } else {
                    // Login gagal, tampilkan pesan kesalahan atau arahkan kembali ke halaman login
                    $this->session->set_flashdata('error', 'Login gagal. Periksa kembali username dan password Anda.');
                }
            } else {
                // Verifikasi reCAPTCHA gagal
                $this->session->set_flashdata('error', 'Verifikasi reCAPTCHA gagal. Pastikan Anda bukan robot dan coba lagi.');
            }
        }
    
        $data = array (
            'title' => 'Login User',
        );
        $this->load->view('v_login_user', $data);
    }
    

    
    public function logout_user()
    {
        $this->m_auth->logout();
    }
}
?>
