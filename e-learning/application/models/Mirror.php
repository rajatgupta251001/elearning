<?php

Class Mirror extends CI_Model {

  public function login($data,$pass) {

  $condition = "username = "."'".$data."'and password = "."'".$pass."'";
  $this->db->select('*');
  $this->db->from('login');
  $this->db->where($condition);
  $this->db->limit(1);
  $query = $this->db->get();

  if ($query->num_rows() == 1) {
  return $query->result();
  } else {
  return 2;
  }
  }

  public function changepass($user,$password1)
  {
  $this->db->set('password',$password1);
  $this->db->where('username', $user);
  $this->db->update('login');
  }

  public function manager($data) {

  $condition = "Type = "."'".$data."'";
  $this->db->select('*');
  $this->db->from('manager');
  $this->db->where($condition);
  return($this->db->get()->result());
  }

  public function manager_detail($data) {

  $condition = "id = "."'".$data."'";
  $this->db->select('*');
  $this->db->from('manager');
  $this->db->where($condition);
  return($this->db->get()->result());
  }
  public function manager_question($data) {

  $condition = "manager = "."'".$data."'";
  $this->db->select('*');
  $this->db->from('Question');
  $this->db->where($condition);
  return($this->db->get()->result());
  }


  public function get_question($data) {

  $condition = "ques_id = "."'".$data."'";
  $this->db->select('*');
  $this->db->from('Question');
  $this->db->where($condition);
  return($this->db->get()->result());
  }

  public function delete_login() {
  $condition = "student";
  $this->db->where('rank',$condition);
    $this->db->delete('login');

  }

  public function get_testcase($data) {

  $condition = "ques_id = "."'".$data."'";
  $this->db->select('*');
  $this->db->from('testcase');
  $this->db->where($condition);
  return($this->db->get()->result_array());
  }


  public function marks($username,$ques_id) {

  $condition = "ques_id = "."'".$ques_id."' and username = "."'".$username."'";
  $this->db->select('*');
  $this->db->from('marks');
  $this->db->where($condition);
  return($this->db->get()->result_array());
  }

  public function update_marks($username,$ques_id,$mar) {

  $condition = "ques_id = "."'".$ques_id."' and username = "."'".$username."'";
$data = array('marks' => $mar );
  $this->db->where($condition);
$this->db->update('marks',$data);
  }

  public function update_timer($data,$username) {
  $condition ="username = "."'".$username."'";
  $this->db->where($condition);
$this->db->update('login',$data);
  }

  public function subm($username,$ques_id) {

  $condition = "ques_id = "."'".$ques_id."' and username = "."'".$username."'";
  $this->db->select('*');
  $this->db->order_by("sno", "desc");
  $this->db->from('submittion');
  $this->db->where($condition);
  return($this->db->get()->result_array());
  }


  public function leader($data) {
    $condition = "manager = "."'".$data."'";
  $this->db->select('username,SUM(marks) as mark');
  $this->db->group_by('username');
  $this->db->order_by("mark", "desc");
  $this->db->from('marks');
  $this->db->where($condition);

  return($this->db->get()->result_array());
  }

}


?>
