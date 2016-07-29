<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    public function check_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if(empty($username) or empty($password)) {
            $this->session->set_flashdata('error_message','Username atau password harus diisi');
            redirect(base_url().'login');
        }

        $url_redirect = "http://45.118.112.232:81/mpd-wp/client/index.php?module=base&class=base&method=login";
        $url_api = "http://45.118.112.232:81/mpd-wp/client/index.php?module=base&class=base&method=login_api";
        $url_api .= '&username='.$username;
        $url_api .= '&password='.$password;

        $result = file_get_contents($url_api);
        $result = json_decode($result, true);

        if($result['success']) {
            $url_redirect .= '&username='.$username;
            $url_redirect .= '&password='.$password;

            redirect( $url_redirect );
        }else {
            $this->session->set_flashdata('error_message',$result['message']);
            redirect(base_url().'login');
        }
    }
}
