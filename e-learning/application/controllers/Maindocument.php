<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maindocument extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

public function __construct()
{
parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');


$this->load->library('email');
// Load database
// Load database
$this->load->model('menudocument');
}


public function dashcourse()
{
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin' || $pdata['rank']=='student')
{
  $this->load->helper('url');
   $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['notifi']= $this->menudocument->notification();
    // print_r($result['notifi']);
    $this->load->view('document/dashcourse',$result);
  }
else

{
header('Refresh: 0; URL=' . $redirect7);

}
}

public function dashbranch($dashcourse,$dashbranch)
{
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin' || $pdata['rank']=='student')
{
  $this->load->helper('url');
   $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['dashbranch']=$dashbranch;
    $result['dashcourse']=$dashcourse;
    $this->load->view('document/dashbranch',$result);

  }
else

{
header('Refresh: 0; URL=' . $redirect7);

}
}

public function dashsubject($dashcourse,$dashbranch,$dashsemester,$dashsubject)
{
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin' || $pdata['rank']=='student')
{
  $this->load->helper('url');
   $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['dashbranch']=$dashbranch;
    $result['dashcourse']=$dashcourse;
    $result['dashsemester']=$dashsemester;
    $result['dashsubject']=$dashsubject;
    $this->load->view('document/dashsubject',$result);
  }
else

{
header('Refresh: 0; URL=' . $redirect7);

}
}

public function delete($id,$delete)
{
		$head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin')
{

$this->menudocument->deletep($id,$delete);
// echo $id ."ff".$delete;
 header('Refresh: 0; URL=' . $redirect7."index.php/maindocument/profilevideo");
 }

else
{


            header('Refresh: 0; URL=' . $redirect7);
}

}


public function profilevideo()
{
	$head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin')
{
$data1 = array('username' => $pdata['username'] );

$this->load->helper('url');
    $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['admin'] = $this->menudocument->admin($data1);
     $this->load->view('document/profilevideo',$result);

    }

else
{


            header('Refresh: 0; URL=' . $redirect7);
}

}



public function finaledit($id)
{

  error_reporting(0);
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;
$redirect70 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :$head."index.php/maindocument/profilevideo";

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];


if($pdata['rank']=='admin')
{
$data1 = array('username' => $pdata['username'] );

$this->load->helper('url');


$edit_title=$this->input->post('edit_title');
$edit_type=$this->input->post('edit_type');
$edit_embedded=htmlspecialchars($this->input->post('edit_embedded'));


$exitsvideo=$this->menudocument->test($edit_embedded);


if($exitsvideo == false)
{



$editfi=$this->menudocument->editfi($id);

if($edit_title =='')
	$edit_title=$editfi[0]['title'];
if($edit_type =='')
	$edit_subtitle=$editfi[0]['type'];
if($edit_embedded =='')
	$edit_embedded=$editfi[0]['embedded'];



$this->menudocument->edv($id,$edit_title,$edit_type,$edit_embedded);







header('Refresh: 0; URL=' . $redirect70);
}

else
{
echo "already exits";
}
}
else
{


            header('Refresh: 0; URL=' . $redirect7);
}
}



public function profilevideoedit($id)
{
	$head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin')
{
$data1 = array('username' => $pdata['username'] );

$this->load->helper('url');
    $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['admin'] = $this->menudocument->admin($data1);
     $result['edit'] = $id;
     $this->load->view('document/profilevideoedit',$result);

    }

else
{


            header('Refresh: 0; URL=' . $redirect7);
}

}




public function upload($ajax_course,$ajax_branch,$ajax_semester,$ajax_subject)
{
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if($pdata['rank']=='admin')
{
$data1 = array('username' => $pdata['username'] );

$this->load->helper('url');
    $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['admin'] = $this->menudocument->admin($data1);
    $result['ajax_course']=$ajax_course;
    $result['ajax_branch']=$ajax_branch;
    $result['ajax_semester']=$ajax_semester;
    $result['ajax_subject']=$ajax_subject;
    $this->load->view('document/upload',$result);
}

else
{


            header('Refresh: 0; URL=' . $redirect7);
}


}


public function upload1()
{
  error_reporting(0);
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];


if($pdata['rank']=='admin')
{
$data1 = array('username' => $pdata['username'] );

$this->load->helper('url');



$exits=htmlspecialchars($this->input->post('embedded'));
$exitsvideo=$this->menudocument->test($exits);

if($exitsvideo == false)

{

$mydate=getdate(date("U"));




 $data = array(
'course' => $this->input->post('ajax_course'),
'branch' => $this->input->post('ajax_branch'),
'semester' => $this->input->post('ajax_semester'),
'subject' => $this->input->post('ajax_subject'),
'title' => $this->input->post('title'),
'type' => $this->input->post('type'),
'active' => 'YES',
'embedded' => $this->input->post('embedded'),
);

$datai = array(
  'link' => 'defaultdoc.jpg',
'uploadname'=>$pdata['username'],
'date'=>$mydate[mday]." ".$mydate[month]." ".$mydate[year],/*current date*/
'views'=>'0'
   );
$this->menudocument->insertvideo($data);
$this->menudocument->insertvideoi($datai);
$this->menudocument->uploadvideo($pdata['username']);
$noti = array('admin' => $pdata['username']."@kiet.edu" ,'link' => $data['embedded'] ,'subject' => "Uploaded a document in ".$data['course']."/".$data['branch']."/".$data['semester']."/".$data['subject']." about ".$data['title']);
$this->menudocument->doc_noti($noti);
  // $result['course'] = $this->menudocument->course();
    // $result['branch'] = $this->menudocument->branch();
    // $result['semester'] = $this->menudocument->semester();
    // $result['subject'] = $this->menudocument->subject();
    // $result['active'] = $this->menudocument->active();
    // $result['images'] = $this->menudocument->images();
    // $result['video'] = $this->menudocument->video();
    // $result['admin'] = $this->menudocument->admin($data1);
    // $result['ajax_course']=$ajax_course;
    // $result['ajax_branch']=$ajax_branch;
    // $result['ajax_semester']=$ajax_semester;
    // $result['ajax_subject']=$ajax_subject;
    // $this->load->view('upload',$result);







$this->load->view('document/excite');
}

else
{
echo "already exits";
}
}
else
{


            header('Refresh: 0; URL=' . $redirect7);
}


}





public function single($embedded)
{
  $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

if(($pdata['rank']=='admin')||($pdata['rank']=='superadmin')||($pdata['rank']=='student'))
{
$data1 = array('username' => $pdata['username'] );

$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

    $this->load->helper('url');

    $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();

    $result['admin'] = $this->menudocument->admin($data1);


    $final_ip = $this->menudocument->ip($embedded,$pdata['username']);

if($final_ip == false)
{       $ipins = array('id' => $embedded, 'ip' => $ip,'user'=> $pdata['username']);
    $this->menudocument->insertip($ipins);
    $this->menudocument->views($embedded);

}


    $result['embedded']=$embedded;
    if (is_numeric($embedded)) {
      # code...


    $this->load->view('document/embedded',$result);



    }
    else
      header('Refresh: 0; URL=' . $redirect7);
}

else
{


            header('Refresh: 0; URL=' . $redirect7);
}


}



}
