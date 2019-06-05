<?php

Class Login extends CI_Model {


// Read data using username and password
public function login1($data) {
$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return True;
} else {
return False;
}
}


public function forget($data) {
$condition = "username ="."'".$data['username']."'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
return $this->db->get()->result_array();
}


public function register($data) {
$condition = "username ="."'".$data['username']."'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() >= 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
public function read_user_information($username) {

$condition = "username =" . "'" . $username . "'";
$this->db->select('*');
$this->db->from('login');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

public function admin($data) {
$condition = "email =" . "'" . $data['username']. "'";
$this->db->select('*');
$this->db->from('admin');
$this->db->where($condition);
// $this->db->limit(2);
$query= $this->db->get();
if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


public function insert($data_insert)
{
$this->db->insert('login', $data_insert);
    }


}

?>
