<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class user_model extends CI_Model {
  function create($data) {
    $this->db->insert("t_account", $data);
  }

  function read($where = "", $order = ""){
    if(!empty($where)) $this->db->where($where);
    if(!empty($order)) $this->db->order($order);

    $query = $this->db->get("t_account");
    if ($query and $query->num_rows() != 0) {
      return $query->result();
    }
    else {
      return array();
    }
  }

  function update ($where, $data) {
    $this->db->where($where);
    $this->db->update("t_account",$data);
  }

  function delete ($where) {
    $this->db->where($where);
    $this->db->delete("t_account");
  }

}
