<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function index() {
    $data['view'] = "v_dashboard";

    switch($this->session->userdata('level')) {
      case 1:
      $levels = "Administrator";
      break;
      case 2:
      $levels = "Sarana Prasarana";
      break;
      case 3:
      $levels = "Staff Sarana Prasarana";
      break;
      case 4:
      $levels = "Dekanat";
      break;
      case 5:
      $levels = "Pengguna";
      break;
      default:
      break;
    }

      $data['level'] = $levels;
      $this->load->model("user_model");
      $data['jumlahuser'] = $this->user_model->count();
    $data ['username']= $this->session->userdata('username');
    $this->load->view("admin",$data);
  }
}
