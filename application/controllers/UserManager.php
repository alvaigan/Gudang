<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManager extends CI_Controller {
  public function index() {
    $data['success'] = $this->session->flashdata("success");
    $data['error'] = $this->session->flashdata("error");

    $data['treeview'] = "active";
    $this->load->model("user_model");
    $data ['result'] = $this->user_model->read();
    $data['level'] = $this->session->userdata('level');
		$data ['username']= $this->session->userdata('username');
    $data['view'] = "user/v_list";
    $this->load->view("admin",$data);
  }

  public function tambah() {
    $this->load->model("user_model");
    $data['view'] = "user/v_form";
    $data['username'] = $this->session->userdata('username');
    $this->load->view("admin", $data);
  }

  function do_add() {
    $userdata = array(
                        'Username'  => $this->input->post('Username'),
                        'Password'  => md5($this->input->post('Password')),
                        'Nama'  => $this->input->post('Nama'),
                        'Level'  => $this->input->post('Level'),
                        );
		$this->load->model("user_model");
		$this->user_model->create($userdata);
		$this->session->set_flashdata("success","Tambah data user berhasil !");
		redirect("usermanager");
	}

	function edit($id) {
		$this->load->model("user_model");
		$result = $this->user_model->read("ID_Akun = '$id'");

		$data['result'] = $result[0];
		$data['form_edit'] = TRUE;
		$data['view'] = "user/v_form";
		$data ['username']= $this->session->userdata('username');
		$this->load->view("admin", $data);

	}

	function do_edit($id) {
    $pw = $this->input->post('Password');
    if (empty($pw)) {
    $userdata = array(
                        'Username'  => $this->input->post('Username'),
                        'Nama'  => $this->input->post('Nama'),
                        'Level'  => $this->input->post('Level'),
                        );
                      } else {
$userdata = array(
                        'Username'  => $this->input->post('Username'),
                        'Nama'  => $this->input->post('Nama'),
                        'Password'  => md5($this->input->post('Password')),
                        'Level'  => $this->input->post('Level'),
                        );
                      }
		$this->load->model("user_model");
		$this->user_model->update("ID_Akun = '$id'",$userdata);
		$this->session->set_flashdata("success","Edit data user berhasil !");
		redirect("usermanager");
	}

	function delete($id) {
		$this->load->model("user_model");
		$this->user_model->delete("ID_Akun = '$id'");
		$this->session->set_flashdata("error","Hapus data user berhasil !");
		redirect("usermanager");
	}
}
