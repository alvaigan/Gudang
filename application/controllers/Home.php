<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() {
		$data['success'] = $this->session->flashdata("success");
    $data['error'] = $this->session->flashdata("error");

		$data['view'] = "v_login";
		$this->load->view("index",$data);
	}

	function do_login() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $where = array(
            "Username" => $username,
            "Password" => md5($password)
        );

        $this->load->model("login_model");
        $result=$this->login_model->read($where);

        if(count($result) != 0 ){
						$uusername = $result[0]->Nama;
            $this->session->set_userdata("username", $uusername);

            $level = $result[0]->Level;
            $this->session->set_userdata("level", $level);

            redirect("dashboard");
        } else {
            $this->session->set_flashdata("error","Username atau password salah");
            redirect("home");
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect("home");
    }
}
