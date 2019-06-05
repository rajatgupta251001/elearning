<?php

Class Menudocument extends CI_Model {

// Insert registration data in database
// public function registration_insert($data) {

// // Query to check whether username already exist or not
// $condition = "user_name =" . "'" . $data['user_name'] . "'";
// $this->db->select('*');
// $this->db->from('user_login');
// $this->db->where($condition);
// $this->db->limit(1);
// $query = $this->db->get();
// if ($query->num_rows() == 0) {

// // Query to insert data in database
// $this->db->insert('user_login', $data);
// if ($this->db->affected_rows() > 0) {
// return true;
// }
// } else {
// return false;
// }
// }

// Read data using username and password
public function course()
{
return $this->db->get('course')->result();
    }

// Read data from database to show data in admin page
public function branch() {
return $this->db->get('branch')->result();
}


public function semester() {
return $this->db->get('semester')->result();
}


public function subject() {
return $this->db->get('subject')->result();
}

public function video() {
return $this->db->get('document')->result();
}



public function images() {
return $this->db->get('images_document')->result();
}

public function notification() {
  $this->db->order_by('sno','desc');

  $this->db->limit(6);
return $this->db->get('noti_doc')->result();
}

public function active() {
$active="YES";
$condition = "active =" . "'" . $active . "'";
$this->db->select('*');
$this->db->from('document');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result();
}

public function admin($data1) {

$condition = "email =" . "'" . $data1['username'] . "@kiet.edu'";
$this->db->select('*');
$this->db->from('admin_document');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result();
}

public function profile($data1) {

$condition = "email =" . "'" . $data1 . "@kiet.edu'";
$this->db->select('*');
$this->db->from('admin_bio');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result();
}

public function views($embedded) {
// $this->db->limit(2);
$this->db->set('views', 'views+1', FALSE);
$this->db->where('id', $embedded);
$this->db->update('images_document');
}

public function uploadvideo($data) {
// $this->db->limit(2);
$this->db->set('upload', 'upload+1', FALSE);
$this->db->where('email', $data);
$this->db->update('admin_document');
}
public function deletep($id,$delete) {
// $this->db->limit(2);
$this->db->set('active', $delete);
$this->db->where('sno', $id);
$this->db->update('document');
}



public function edv($id,$edit_title,$edit_type,$edit_embedded)
 {
// $this->db->limit(2);
$this->db->set('title', $edit_title);
$this->db->set('type', $edit_type);
$this->db->set('embedded', $edit_embedded);
$this->db->where('sno', $id);
$this->db->update('document');
}



public function insertvideo($data)
{
$this->db->insert('document',$data);
    }

    public function insertvideoi($datai)
{
$this->db->insert('images_document', $datai);
    }

public function ip($embedded,$user) {
$condition = "id =" . "'" . $embedded . "' AND " . "user =" . "'" . $user . "'";
$this->db->select('*');
$this->db->from('ip_document');
$this->db->where($condition);
$this->db->limit(1);
$query= $this->db->get();
if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


public function test($exits) {
$condition = "embedded=" . "'" . $exits ."'";
$this->db->select('*');
$this->db->from('document');
$this->db->where($condition);
$query= $this->db->get();
if ($query->num_rows() >= 1) {
return $query->result();
} else {
return false;
}
}

 public function insertip($ip)
{
$this->db->insert('ip_document', $ip);
    }


    public function editfi($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('document');
$this->db->where($condition);
return $this->db->get()->result_array();
}
public function doc_noti($data)
{

$this->db->insert('noti_doc',$data);
    }

}

?>
