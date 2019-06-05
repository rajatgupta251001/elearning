<?php

Class Menu extends CI_Model {

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
public function search_video($search) {
$this->db->select('sno');
$this->db->from('video');
$this->db->like('course', $search, 'before');
$this->db->like('course', $search, 'after');
$this->db->or_like('branch', $search, 'before');
$this->db->or_like('branch', $search, 'after');
$this->db->or_like('semester', $search, 'before');
$this->db->or_like('semester', $search, 'after');
$this->db->or_like('subject', $search, 'before');
$this->db->or_like('subject', $search, 'after');
$this->db->or_like('topic', $search, 'before');
$this->db->or_like('topic', $search, 'after');
$this->db->or_like('subtopic', $search, 'before');
$this->db->or_like('subtopic', $search, 'after');
$this->db->or_like('title', $search, 'before');
$this->db->or_like('title', $search, 'after');
$this->db->or_like('subtitle', $search, 'before');
$this->db->or_like('subtitle', $search, 'after');
$this->db->or_like('description', $search, 'before');
$this->db->or_like('description', $search, 'after');
return $this->db->get()->result_array();
}

public function search_video1($search) {
$this->db->select('id');
$this->db->from('images');
$this->db->like('uploadname', $search, 'before');
$this->db->like('uploadname', $search, 'after');
return $this->db->get()->result_array();
}

public function find_search_history($username) {
$this->db->select('search_history');
$this->db->from('login');
$this->db->where('username', $username);
return $this->db->get()->result_array();
}

public function insert_search_history($search,$user) {
// $this->db->limit(2);
$this->db->set('search_history',$search);
$this->db->where('username', $user);
$this->db->update('login');
}



   public function searchimages()
{
return $this->db->get('images')->result_array();
    }

   public function api()
{
return $this->db->get('api')->result_array();
    }


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


public function changepass($user,$password1)
{
$this->db->set('password',$password1);
$this->db->where('username', $user);
$this->db->update('login');
}
public function subject() {
return $this->db->get('subject')->result();
}

public function video() {
return $this->db->get('video')->result();
}
public function video_controller($embedded) {

$condition = "sno =" . "'" . $embedded . "'";
$this->db->select('*');
$this->db->from('video');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result_array();
}


public function images() {
return $this->db->get('images')->result();
}


public function active($videotype) {
$active="YES";
$condition = "active =" . "'" . $active . "' AND videotype ='".$videotype."'";
$this->db->select('*');
$this->db->from('video');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result();
}

public function activesearch() {
$active="YES";
$condition = "active =" . "'" . $active ."'";
$this->db->select('*');
$this->db->from('video');
$this->db->where($condition);
// $this->db->limit(2);
return $this->db->get()->result();
}

public function admin($data1) {

$condition = "email =" . "'" . $data1['username'] . "@kiet.edu'";
$this->db->select('*');
$this->db->from('admin');
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
$this->db->update('images');
}

public function uploadvideo($data) {
// $this->db->limit(2);
$this->db->set('upload', 'upload+1', FALSE);
$this->db->where('email', $data);
$this->db->update('admin');
}
public function deletep($id,$delete) {
// $this->db->limit(2);
$this->db->set('active', $delete);
$this->db->where('sno', $id);
$this->db->update('video');
}



public function edv($id,$edit_topic,$edit_subtopic,$edit_title,$edit_subtitle,$edit_description,$edit_embedded)
 {
// $this->db->limit(2);
$this->db->set('topic', $edit_topic);
$this->db->set('subtopic', $edit_subtopic);
$this->db->set('title', $edit_title);
$this->db->set('subtitle', $edit_subtitle);
$this->db->set('description', $edit_description);
$this->db->set('embedded', $edit_embedded);
$this->db->where('sno', $id);
$this->db->update('video');
}


public function edi($id,$edit_length) {
// $this->db->limit(2);
$this->db->set('length', $edit_length);
$this->db->where('id', $id);
$this->db->update('images');
}

public function insertvideo($data)
{
$this->db->insert('video', $data);
    }

    public function insertvideoi($datai)
{
$this->db->insert('images', $datai);
    }

public function ip($embedded,$user) {
$condition = "id =" . "'" . $embedded . "' AND " . "user =" . "'" . $user . "'";
$this->db->select('*');
$this->db->from('ip');
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
$this->db->from('video');
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
$this->db->insert('ip', $ip);
    }


    public function editfi($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('video');
$this->db->where($condition);
return $this->db->get()->result_array();
}






public function search_document($search) {
$this->db->select('sno');
$this->db->from('document');
$this->db->like('course', $search, 'before');
$this->db->like('course', $search, 'after');
$this->db->or_like('branch', $search, 'before');
$this->db->or_like('branch', $search, 'after');
$this->db->or_like('semester', $search, 'before');
$this->db->or_like('semester', $search, 'after');
$this->db->or_like('subject', $search, 'before');
$this->db->or_like('subject', $search, 'after');
$this->db->or_like('title', $search, 'before');
$this->db->or_like('title', $search, 'after');
$this->db->or_like('subtitle', $search, 'before');
$this->db->or_like('subtitle', $search, 'after');
$this->db->or_like('type', $search, 'before');
$this->db->or_like('type', $search, 'after');
return $this->db->get()->result_array();
}

public function search_document1($search) {
$this->db->select('id');
$this->db->from('images_document');
$this->db->like('uploadname', $search, 'before');
$this->db->like('uploadname', $search, 'after');
return $this->db->get()->result_array();
}


   public function searchimagesdocument()
{
return $this->db->get('images_document')->result_array();
    }




public function runapi($data) {
// $this->db->limit(2);
$this->db->set('run', 'run+1', FALSE);
$this->db->where('api', $data);
$this->db->update('api');
}
public function compileapi($data) {
// $this->db->limit(2);
$this->db->set('compile', 'compile+1', FALSE);
$this->db->where('api', $data);
$this->db->update('api');
}




public function rank()
{

return $this->db->get('rank')->result_array();

}

public function contest()
{

return $this->db->get('contest')->result_array();

}

public function contest1($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('contest');
$this->db->where($condition);
return $this->db->get()->result();
}

public function inpu($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('input');
$this->db->from('contest');
$this->db->where($condition);
return $this->db->get()->result_array();
}

public function outputans($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('output');
$this->db->from('contest');
$this->db->where($condition);
return $this->db->get()->result_array();
}

public function contestcode1($data,$user) {
$condition = "contestid =" . "'" . $data . "' AND " . "user =" . "'" . $user . "'";
$this->db->select('*');
$this->db->from('contestcode');
$this->db->where($condition);
return $this->db->get()->result();
}

public function rank1($data) {
$condition = "name =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('rank');
$this->db->where($condition);
return $this->db->get()->result();
}


public function exitsuser($data) {
$condition = "name =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('rank');
$this->db->where($condition);
$this->db->limit(1);
$query= $this->db->get();
if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}


public function contestlogic($data) {
$condition = "sno =" . "'" .$data.  "'";
$this->db->select('*');
$this->db->from('contest');
$this->db->where($condition);
return $this->db->get()->result_array();
}




public function logicsuccessful($data) {
// $this->db->limit(2);
$this->db->set('successful', 'successful+1', FALSE);
$this->db->where('sno', $data);
$this->db->update('contest');
}


public function logicsubmittion($data) {
// $this->db->limit(2);
$this->db->set('submittion', 'submittion+1', FALSE);
$this->db->where('sno', $data);
$this->db->update('contest');
}

public function logicscore($data) {
// $this->db->limit(2);
$this->db->set('score', 'score+100', FALSE);
$this->db->where('name', $data);
$this->db->update('rank');
}

public function logicuser($id,$data) {
// $this->db->limit(2);
$this->db->set('user', $data);
$this->db->where('sno', $id);
$this->db->update('contest');
}

  public function en_video()
  {

    return $this->db->get('admin')->result();
  }
  public function en_document()
  {

    return $this->db->get('admin_document')->result();
  }

  public function en_document1()
  {

    $this->db->select('video.*,images.*');
    $this->db->from('video');
    $this->db->join('images', 'video.sno = images.id', 'right outer');
    $this->db->where('video.branch',"EN");
    $query = $this->db->get();
    return $query->result();
  }
  public function en_video1()
  {

    $this->db->select('document.*,images_document.*');
    $this->db->from('document');
    $this->db->join('images_document', 'document.sno = images_document.id', 'right outer');
    $this->db->where('document.branch',"EN");
    $query = $this->db->get();
    return $query->result();
  }

public function report_vi()
{

  $this->db->select('images.uploadname , count(images.uploadname) as shivam ');
  $this->db->from('images');

  $this->db->group_by('images.uploadname');

  $query = $this->db->get();
  return $query->result();
}
public function report_doc()
{

  $this->db->select('images_document.uploadname , count(images_document.uploadname) as shivam1 ');
  $this->db->from('images_document');

  $this->db->group_by('images_document.uploadname');

  $query = $this->db->get();
  return $query->result();
}

public function fetch_lab()
{

  return $this->db->get('lab')->result();
}


}

?>
