<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
    $this->load->model('login');
    $this->load->model('menu');
  }
  public function index()
  {
    $this->load->helper('url');
    if (false)
    {
      echo "<script>
      alert('please switch to google chrome / download it ');
    </script>";
    $head="https://www.google.com/chrome/";
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :$head;
    echo "Redirecting.................".$head;
    header('Refresh: 0; URL=' . $redirect7);
  }
  if(isset($this->session->userdata['logged_in']))
  {
    $redirect5 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "index.php/main/dashsuper";
    $redirect9 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "index.php/main/dashstudent";
    $redirect10 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "index.php/main/dashadmin";

    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "retry";

    $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

    if(($pdata['rank']=='superadmin'))
    {

      header('Refresh: 0; URL=' . $redirect5);
    }
    else if (($pdata['rank']=='student') )
    {
    # code...

      header('Refresh: 0; URL=' . $redirect9);
    }
    else if(($pdata['rank']=='admin') )
    {
      header('Refresh: 0; URL=' . $redirect10);

    }
    else
    {
      header('Refresh: 0; URL=' . $redirect7);

    }




  }
  $this->load->view('login');

}
public function retry()
{
  $this->load->helper('url');
  if (false)
  {
    echo "<script>
    alert('please switch to google chrome / download it ');
  </script>";
  $head="https://www.google.com/chrome/";
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :$head;
  echo "Redirecting.................".$head;
  header('Refresh: 0; URL=' . $redirect7);
}
$this->load->view('loginretry');

}
public function forget()
{
  $this->load->helper('url');
  $this->load->view('forget');

}
public function signup()
{
  $this->load->helper('url');
  if (false)
  {
    echo "<script>
    alert('please switch to google chrome / download it ');
  </script>";
  $head="https://www.google.com/chrome/";
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :$head;
  echo "Redirecting.................".$head;
  header('Refresh: 0; URL=' . $redirect7);
}
$this->load->view('signup');

}







public function codemirror()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $this->load->view('codemirror/index');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}

public function changepass()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $this->load->view('changepass');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}

public function changepass1()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');


    $password1=$this->input->post('password1');
    $password2=$this->input->post('password2');
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "changepass";


    if(preg_match('/\s/', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));

   if(preg_match('/[\'"]/', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));


   if(preg_match('/[\/\\\\]/', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));


// if(preg_match('/(AND|null|where|limit)/i', $username))
//     exit(header('Refresh: 0; URL=' . $redirect7));


   if(preg_match('/(union|select|from|where)/i', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));

   if(preg_match('/(group|order|having|limit)/i', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));


   if(preg_match('/(into|file|case)/i', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));


   if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $password1))
     exit(header('Refresh: 0; URL=' . $redirect7));



     //for sql injection
   if(preg_match('/\s/', $password2))
     exit(header('Refresh: 0; URL=' . $redirect7));

   if(preg_match('/[\'"]/', $password2))
    exit(header('Refresh: 0; URL=' . $redirect7));
    //for sql injection


  if(preg_match('/[\/\\\\]/', $password2))
   exit(header('Refresh: 0; URL=' . $redirect7));

 if(preg_match('/(and|null|where|limit)/i', $password2))
  exit(header('Refresh: 0; URL=' . $redirect7));


if(preg_match('/(union|select|from|where)/i', $password2))
 exit(header('Refresh: 0; URL=' . $redirect7));


if(preg_match('/(group|order|having|limit)/i', $password2))
 exit(header('Refresh: 0; URL=' . $redirect7));

if(preg_match('/(into|file|case)/i', $password2))
 exit(header('Refresh: 0; URL=' . $redirect7));


if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $password2))
  exit(header ('Refresh: 0; URL=' . $redirect7));

if ($password2 != $password1 || !(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password2)) ) {
    # code...
  exit(header ('Refresh: 0; URL=' . $redirect7));
}


$this->menu->changepass($pdata['username'],$password1);
$this->load->view('changepass1');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

}

else
{

  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  exit(header('Refresh: 0; URL=' . $redirect7));
}
}



function send()
{
  $data = array(
    'username' => $this->input->post('username')
    );
//check

  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :"index.php/main/signup";


  if(preg_match('/\s/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));

 if(preg_match('/[\'"]/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/[\/\\\\]/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


// if(preg_match('/(AND|null|where|limit)/i', $username))
//     exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/(union|select|from|where)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));

 if(preg_match('/(group|order|having|limit)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/(into|file|case)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));
 if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));
 $result = $this->login->forget($data);
 if($result[0]['password']!=null)
 {
  $name=$data['username'];
  $data['username'].="@kiet.edu";
//My Email code
$this->load->library('email');
    $config = array();
    ini_set("SMTP","ssl://smtp.gmail.com");
    ini_set("smtp_port","587");
    $config['useragent'] = 'PHPMailer';
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'smtp.gmail.com';
    $config['smtp_user'] = 'vedant.1610184@kiet.edu';
    $config['smtp_pass'] = 'matterofconnectclips@#';
    $config['smtp_port'] = 587;
    $config['smtp_crypto'] = 'tls';
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
    $this->email->from('vedant.1610184@kiet.edu', 'KIET E-learning');
    $this->email->to($data['username'],$name);
    $this->email->subject('Password Reset For KIET E-learning');
    $message = 'E-learning Username : '.$name.' password :'.$result[0]['password'];
    $this->email->message($message);
    try{
    if(!$this->email->send()){
      die($this->email->print_debugger());
    }
    }catch(Exception $e){
    echo $e->getMessage();
    $this->load->view('busy');
    }
//End of new code

/*
  $this->load->library('email');
  $this->email->from('elearning.kiet@gmail.com', 'KIET E-learning');
  $this->email->to($data['username'],$name);
  $this->email->subject('Password Reset For KIET E-learning');
  $message ='<html><body background="">';
  $message.='<h1>Your KIET E-learning Login Details Are</h1>';
  $message.="<br><br><p>User Name:-       <strong>".$name."</strong></p> <br><p> password   :<strong>".$result[0]['password']."</strong></p><br>";
// $message.='<a href="#"><button>Login</button></a>';
  $message.='</body></html>';
  $this->email->message($message);
  try{
    $this->email->send();
    $this->load->view('forget1');
  }
  catch(Exception $e){
    echo $e->getMessage();

//mail not send
    $this->load->view('busy');

  }
  */
}
else
  $this->load->view('nregister');
}



function search_home()
{

  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin'||$pdata['rank']=='student')
  {
    $this->load->view('search_home');
  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);
  }

}



function search_video()
{

  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin'||$pdata['rank']=='student')
  {
    $search = $this->input->post('search');
    $search=trim($search);

    $result_search=$this->menu->find_search_history($pdata['username']);

    $result_search1 = $search.";".$result_search[0]['search_history'];

    $this->menu->insert_search_history($result_search1,$pdata['username']);

    $aa=array_fill(1, 1500,0);
    $search_exp=explode(" ",$search);
    $i=0;
    while ($search_exp[$i]) {

      switch ($search_exp[$i]) {
        case '1': $search_exp[$i]="I";
      # code...
        break;
        case '2': $search_exp[$i]="II";
      # code...
        break;
        case '3': $search_exp[$i]="iii";
      # code...
        break;
        case '4': $search_exp[$i]="IV";
      # code...
        break;
        case '5': $search_exp[$i]="V";
      # code...
        break;
        case '6': $search_exp[$i]="VI";
      # code...
        break;
        case '7': $search_exp[$i]="VII";
      # code...
        break;
        case '8': $search_exp[$i]="VIII";
      # code...
        break;
        case '9': $search_exp[$i]="IX";
      # code...
        break;
        case '10': $search_exp[$i]="X";
      # code...
        break;
      }
  # code...
      $search_result=$this->menu->search_video($search_exp[$i]);

      $search_result1=$this->menu->search_video1($search_exp[$i]);
      foreach ($search_result as $ka) {
  # code...
        $aa[$ka['sno']]+=150;
      }

      foreach ($search_result1 as $kaa) {
  # code...
        $aa[$kaa['id']]+=150;
      }


      $i++;
    }
    $searchimages=$this->menu->searchimages();
    foreach ($searchimages as $ku) {
  # code...
      $aa[$ku['id']]+=$ku['views'];
    }

    arsort($aa);
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->activesearch();
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['search'] = $aa;
    $result['searchuser'] = $search;
    $this->load->view('search_video',$result);

  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);
  }

}


function search_homedocument()
{

  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin'||$pdata['rank']=='student')
  {
    $this->load->view('dashhomen');
  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);
  }

}



function search_document()
{

  $this->load->model('menudocument');
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin'||$pdata['rank']=='student')
  {
    $search = $this->input->post('search');
    $search=trim($search);
    $result_search=$this->menu->find_search_history($pdata['username']);

    $result_search1 = $search.";".$result_search[0]['search_history'];

    $this->menu->insert_search_history($result_search1,$pdata['username']);
    $aa=array_fill(1, 1500,0);
    $search_exp=explode(" ",$search);
    $i=0;
    while ($search_exp[$i]) {
  # code...
      $search_result=$this->menu->search_document($search_exp[$i]);

      $search_result1=$this->menu->search_document1($search_exp[$i]);
      foreach ($search_result as $ka) {
  # code...
        $aa[$ka['sno']]+=100;
      }

      foreach ($search_result1 as $kaa) {
  # code...
        $aa[$kaa['id']]+=100;
      }


      $i++;
    }
    $searchimages=$this->menu->searchimagesdocument();
    foreach ($searchimages as $ku) {
  # code...
      $aa[$ku['id']]+=$ku['views'];
    }

    arsort($aa);
    $result['course'] = $this->menudocument->course();
    $result['branch'] = $this->menudocument->branch();
    $result['semester'] = $this->menudocument->semester();
    $result['subject'] = $this->menudocument->subject();
    $result['active'] = $this->menudocument->active();
    $result['images'] = $this->menudocument->images();
    $result['video'] = $this->menudocument->video();
    $result['search'] = $aa;
    $result['searchuser'] = $search;
    $this->load->view('search_document',$result);

  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);
  }

}




function send_mail()
{


  $data = array(
    'username' => $this->input->post('username')
    );
//check

  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :"index.php/main/signup";


  if(preg_match('/\s/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));

 if(preg_match('/[\'"]/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/[\/\\\\]/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


// if(preg_match('/(AND|null|where|limit)/i', $username))
//     exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/(union|select|from|where)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));

 if(preg_match('/(group|order|having|limit)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));


 if(preg_match('/(into|file|case)/i', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));
 if(preg_match('/(--|#|\/\*\!\$\%\^\&\(\))/', $data['username']))
   exit(header('Refresh: 0; URL=' . $redirect7));

 $result = $this->login->register($data);

 if ($result == false)
 {


  for ($i = 0; $i < 60; $i++) {

    $arr[$i]=$i;
  }

  shuffle($arr);
  $pass="";
  $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
  for ($i = 0; $i < 10; $i++) {
    $n = $arr[$i];
    $pass.= $alphabet[$n];
  }

  $name=$data['username'];
  $data['username'].="@kiet.edu";

  $this->load->library('email');
  $this->email->from('elearning.kiet@gmail.com', 'KIET E-learning');


  $this->email->to($data['username'],$name);
  $this->email->subject('Register For KIET E-learning');



  $message ='<html><body background="">';
  $message.='<h1>Thank You For Registering In KIET E-learning</h1>';
  $message.="<br><br><p>User Name:-       <strong>".$name."</strong></p> <br><p> password   :<strong>".$pass."</strong></p><br>";
// $message.='<a href="#"><button>Login</button></a>';
  $message.='</body></html>';










  $this->email->message($message);

  try{

    $this->email->send();

//successful
    $result = $this->login->admin($data);
    if ($result == true)
    {
     $data_insert = array(
      'username' => $name,
      'password' => $pass,
      'rank' => "admin"
      );
//rank admin

   }
   else
   {
	//rank student
    $data_insert = array(
      'username' => $name,
      'password' => $pass,
      'rank' => "student"
      );
  }
  $this->login->insert($data_insert);

  $this->load->view('thank');
}
catch(Exception $e){
  echo $e->getMessage();

//mail not send
  $this->load->view('busy');

}
}

else
{

//already registered
  // $this->load->view('alreadyregister');
	$this->load->view('already');
}
}


public function auth()
{


  $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');


  if(isset($this->session->userdata['logged_in']))
  {


    $this->load->view('auth');


  }

  else {
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password')
      );
//check


    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    "index.php/main/retry";


                                    //checkk
$result = $this->login->login1($data);
if ($result == TRUE) {

  $username = $this->input->post('username');
  $result = $this->login->read_user_information($username);

  if ($result != false) {
    $session_data = array(
      'username' => $result[0]->username,
      'rank' => $result[0]->rank,
      'password' => $result[0]->password
      );
// Add user data in session
    $this->session->set_userdata('logged_in', $session_data);

    $this->load->view('auth');
  }
}

else {
  $data = array(
    'error_message' => 'Invalid Username or Password'
    );

  $head=base_url();
  header("location:". $head ."index.php/main/retry");
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
  $sess_array = array(
    'username' => ''
    );
  $this->session->unset_userdata('logged_in1', $sess_array);
  $this->session->sess_destroy();
  $data['message_display'] = 'Successfully Logout';


  $head=base_url();
  header("location:". $head);
}



public function dashadmin() {
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin')
  {

    $ip = getenv('HTTP_CLIENT_IP')?:
    getenv('HTTP_X_FORWARDED_FOR')?:
    getenv('HTTP_X_FORWARDED')?:
    getenv('HTTP_FORWARDED_FOR')?:
    getenv('HTTP_FORWARDED')?:
    getenv('REMOTE_ADDR');
    $mydate=getdate(date("U"));
    $mydate['hours']+=12;
    $mydate['minutes']+=30;
    $dd=array(

      'date'=>$mydate['mday']." ".$mydate['month']." ".$mydate['year'],
      'user_name'=>$pdata['username'],
      'ip'=>$ip,
      'time'=>$mydate['hours'].":".$mydate['minutes'].":".$mydate['seconds']

      );/*current date*/

    $this->db->insert('hitcounter',$dd);
    $this->load->helper('url');
    $this->load->view('dashhomen');

// $createdby =  $_SESSION[logged_in['name']];
  }

  else
  {
   $head=base_url();
   header("location:". $head);
 }




}

public function dashsuper()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='superadmin')
  {

    $this->load->helper('url');
    $this->load->view('super/index');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
}



public function dashstudent() {
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='student')
  {

    $ip = getenv('HTTP_CLIENT_IP')?:
    getenv('HTTP_X_FORWARDED_FOR')?:
    getenv('HTTP_X_FORWARDED')?:
    getenv('HTTP_FORWARDED_FOR')?:
    getenv('HTTP_FORWARDED')?:
    getenv('REMOTE_ADDR');
    $mydate=getdate(date("U"));
    $mydate[hours]+=12;
    $mydate[minutes]+=30;
    $dd=array(

      'date'=>$mydate[mday]." ".$mydate[month]." ".$mydate[year],
      'user_name'=>$pdata['username'],
      'ip'=>$ip,
      'time'=>$mydate[hours].":".$mydate[minutes].":".$mydate[seconds]

      );/*current date*/

    $this->db->insert('hitcounter',$dd);
    $this->load->helper('url');
    $this->load->view('dashhomen');

// $createdby =  $_SESSION[logged_in['name']];
  }

  else
  {
   $head=base_url();
   header("location:". $head);
 }


}



public function commingsoon()
{
  $this->load->helper('url');
  $this->load->view('commingsoon');
}

public function profile()
{
	$head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $result['admin_bio'] = $this->menu->profile($pdata['username']);
    $this->load->helper('url');
    $this->load->view('profile',$result);
  }

  else

  {
    header('Refresh: 0; URL=' . $redirect7);

  }
}





public function dashcourse($videotype)
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {
    $this->load->helper('url');
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active($videotype);
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['videotype']=$videotype;
    $this->load->view('dashcourse',$result);
  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);

  }
}

public function dashbranch($dashcourse,$dashbranch,$videotype)
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {
    $this->load->helper('url');
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active($videotype);
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['dashbranch']=$dashbranch;
    $result['dashcourse']=$dashcourse;
    $result['videotype']=$videotype;
    $this->load->view('dashbranch',$result);
  }
  else

  {
    header('Refresh: 0; URL=' . $redirect7);

  }
}

public function dashsubject($dashcourse,$dashbranch,$dashsemester,$dashsubject,$videotype)
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {
    $this->load->helper('url');
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active($videotype);
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['dashbranch']=$dashbranch;
    $result['dashcourse']=$dashcourse;
    $result['dashsemester']=$dashsemester;
    $result['dashsubject']=$dashsubject;
    $result['videotype']=$videotype;
    $this->load->view('dashsubject',$result);
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

    $this->menu->deletep($id,$delete);
// echo $id ."ff".$delete;
    header('Refresh: 0; URL=' . $redirect7."index.php/main/profilevideo");
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
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active();
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['admin'] = $this->menu->admin($data1);
    $this->load->view('profilevideo',$result);

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
  $redirect70 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :$head."index.php/main/profilevideo";

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];


  if($pdata['rank']=='admin')
  {
    $data1 = array('username' => $pdata['username'] );

    $this->load->helper('url');


    $edit_topic=$this->input->post('edit_topic');
    $edit_subtopic=$this->input->post('edit_subtopic');
    $edit_title=$this->input->post('edit_topic');
    $edit_subtitle=$this->input->post('edit_subtitle');
    $edit_description=$this->input->post('edit_description');
    $edit_embedded=htmlspecialchars($this->input->post('edit_embedded'));
    $edit_length=$this->input->post('edit_length');


    $exitsvideo=$this->menu->test($edit_embedded);


    if($exitsvideo == false)
    {



      $editfi=$this->menu->editfi($id);

      if($edit_topic =='')
       $edit_topic=$editfi[0]['topic'];
     if($edit_subtopic =='')
       $edit_subtopic=$editfi[0]['subtopic'];
     if($edit_title =='')
       $edit_title=$editfi[0]['title'];
     if($edit_subtitle =='')
       $edit_subtitle=$editfi[0]['subtitle'];
     if($edit_description =='')
       $edit_description=$editfi[0]['description'];
     if($edit_embedded =='')
       $edit_embedded=$editfi[0]['embedded'];
     if($edit_length =='')
       $edit_length=$editfi[0]['length'];



     $this->menu->edv($id,$edit_topic,$edit_subtopic,$edit_title,$edit_subtitle,$edit_description,$edit_embedded);

     $this->menu->edi($id,$edit_length);





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
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active();
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['admin'] = $this->menu->admin($data1);
    $result['edit'] = $id;
    $this->load->view('profilevideoedit',$result);

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
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active();
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();
    $result['admin'] = $this->menu->admin($data1);
    $result['ajax_course']=$ajax_course;
    $result['ajax_branch']=$ajax_branch;
    $result['ajax_semester']=$ajax_semester;
    $result['ajax_subject']=$ajax_subject;
    $this->load->view('upload',$result);
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



    $topic=$this->input->post('topic');
    $subtopic=$this->input->post('subtopic');
    $topic1=$this->input->post('topic1');

    $source=$this->input->post('source');
    $videotype=$this->input->post('videotype');
    $subtopic1=$this->input->post('subtopic1');
    $exits=htmlspecialchars($this->input->post('embedded'));
    $exitsvideo=$this->menu->test($exits);

    if($exitsvideo == false)
    {

      if($topic==null)
      {
        $topic=$topic1;
      }
      if($subtopic==null)
      {
        $subtopic=$subtopic1;
      }


      $mydate=getdate(date("U"));




      $data = array(
        'course' => $this->input->post('ajax_course'),
        'branch' => $this->input->post('ajax_branch'),
        'semester' => $this->input->post('ajax_semester'),
        'subject' => $this->input->post('ajax_subject'),
        'topic' => $topic,
        'subtopic' => $subtopic,
        'title' => $this->input->post('title'),
        'subtitle' => $this->input->post('subtitle'),
        'description' => $this->input->post('description'),
        'active' => 'YES',
        'embedded' => $this->input->post('embedded'),
        'source' => $source,
        'videotype' => $videotype
        );

      $datai = array(
        'link' => 'default.jpg',
        'uploadname'=>$pdata['username'],
        'date'=>$mydate[mday]." ".$mydate[month]." ".$mydate[year],/*current date*/
        'likes'=>'0',
        'views'=>'0',
        'length'=>$this->input->post('length')
        );
      $this->menu->insertvideo($data);
      $this->menu->insertvideoi($datai);
      $this->menu->uploadvideo($pdata['username']."@kiet.edu");
  // $result['course'] = $this->menu->course();
    // $result['branch'] = $this->menu->branch();
    // $result['semester'] = $this->menu->semester();
    // $result['subject'] = $this->menu->subject();
    // $result['active'] = $this->menu->active();
    // $result['images'] = $this->menu->images();
    // $result['video'] = $this->menu->video();
    // $result['admin'] = $this->menu->admin($data1);
    // $result['ajax_course']=$ajax_course;
    // $result['ajax_branch']=$ajax_branch;
    // $result['ajax_semester']=$ajax_semester;
    // $result['ajax_subject']=$ajax_subject;
    // $this->load->view('upload',$result);

      $this->load->view('excite');
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
    $result['course'] = $this->menu->course();
    $result['branch'] = $this->menu->branch();
    $result['semester'] = $this->menu->semester();
    $result['subject'] = $this->menu->subject();
    $result['active'] = $this->menu->active();
    $result['images'] = $this->menu->images();
    $result['video'] = $this->menu->video();

    $video_source=$this->menu->video_controller($embedded);

    $result['admin'] = $this->menu->admin($data1);


    $final_ip = $this->menu->ip($embedded,$pdata['username']);

    if($final_ip == false)
      {       $ipins = array('id' => $embedded, 'ip' => $ip,'user'=> $pdata['username']);
    $this->menu->insertip($ipins);
    $this->menu->views($embedded);

  }


  $result['embedded']=$embedded;

  if (is_numeric($embedded)) {
      # code...
    if( $video_source[0]['source']=='drive')
    {
      $head= html_entity_decode($video_source[0]['embedded']);
      $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
      $head;
      echo $head;
      header('Refresh: 0; URL=' . $redirect7);
    }
    else if($video_source[0]['source']=='youtube')
      $this->load->view('embedded',$result);
  }
  else
    header('Refresh: 0; URL=' . $redirect7);
}

else
{


  header('Refresh: 0; URL=' . $redirect7);
}


}





public function compiler()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $this->load->view('codemirror/compiler');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}


public function compiler1()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $compiler['language'] = $this->input->post('language');
    $compiler['input'] = $this->input->post('input');
    $compiler['code']=$_POST['code'];
    $submit = $this->input->post('submit');

    $api=$this->menu->api();


    $config['upload_path'] = './application/views/codemirror/api/examples/';
    $config['allowed_types'] = '*';
    $config['max_size'] = '1000';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('codefile'))
    {

      if ($_POST['code']=='') {
  # code...
        $head=base_url()."index.php/main/compiler";
        $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
        $head;

        exit(header('Refresh: 0; URL=' . $redirect7));

      }

      if ($submit=="run") {
  # code...
        if ($api[0]['run']<=999) {

          $compiler['api']=$api[0]['api'];
  # code...
        }

        else if ($api[1]['run']<=999) {

          $compiler['api']=$api[1]['api'];
  # code...
        }
        else
        {

          $compiler['api']=$api[2]['api'];
        }
        $this->load->view('codemirror/api/examples/runsource',$compiler);
        $this->menu->runapi($compiler['api']);

      }
      else if ($submit=="compile") {
        if ($api[0]['compile']<=999) {

          $compiler['api']=$api[0]['api'];
  # code...
        }
        else if ($api[1]['compile']<=999) {

          $compiler['api']=$api[1]['api'];
  # code...
        }
        else
        {
          $compiler['api']=$api[2]['api'];
        }
        $this->load->view('codemirror/api/examples/compilesource',$compiler);
        $this->menu->compileapi($compiler['api']);
  # code...

      }
      else
      {

        $head=base_url()."index.php/main/compiler";
        $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
        $head;

        exit(header('Refresh: 0; URL=' . $redirect7));
      }
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());
//file check
      $compiler['filecode'] =$data['upload_data']['file_name'];

      if ($submit=="run") {
  # code...
        if ($api[0]['run']<=999) {

          $compiler['api']=$api[0]['api'];
  # code...
        }

        else if ($api[1]['run']<=999) {

          $compiler['api']=$api[1]['api'];
  # code...
        }
        else
        {

          $compiler['api']=$api[2]['api'];
        }

        $this->load->view('codemirror/api/examples/runfile',$compiler);
        $this->menu->runapi($compiler['api']);

      }
      else if ($submit=="compile") {
        if ($api[0]['compile']<=999) {

          $compiler['api']=$api[0]['api'];
  # code...
        }
        else if ($api[1]['compile']<=999) {

          $compiler['api']=$api[1]['api'];
  # code...
        }
        else
        {
          $compiler['api']=$api[2]['api'];
        }
        $this->load->view('codemirror/api/examples/compilefile',$compiler);
        $this->menu->compileapi($compiler['api']);
  # code...

      }
      else
      {

        $head=base_url()."index.php/main/compiler";
        $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
        $head;

        exit(header('Refresh: 0; URL=' . $redirect7));
      }






    }


// $this->load->view('codemirror/compiler');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}


public function contest()
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $data['rank']=$this->menu->rank();
    $data['contest']=$this->menu->contest();



    usort($data['rank'], function($a, $b) {
      return $b['score'] - $a['score'];
    });
    $this->load->view('codemirror/contest',$data);

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}




public function contestquestion($id)
{
  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $data['contest']=$this->menu->contest1($id);
    $data['contestcode']=$this->menu->contestcode1($id,$pdata['username']);
    $data['rank']=$this->menu->rank1($pdata['username']);
    $data['id']=$id;
    $exits=$this->menu->exitsuser($pdata['username']);
    $aa['name']=$pdata['username'];
    if($exits == false)
    {
      $this->db->insert('rank',$aa);
    }
    $this->load->view('codemirror/contestquestion',$data);

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

  }
  else
  {

    $head=base_url();
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }
}


public function contestquestion1($id)
{
  $pdata = $this->session->userdata('logged_in');
  $compiler['contest']=$this->menu->contest1($id);
  $compiler['contestcode']=$this->menu->contestcode1($id,$pdata['username']);
  $compiler['rank']=$this->menu->rank1($pdata['username']);
  $compiler['id']=$id;
// $createdby =  $_SESSION[logged_in['name']];
  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {

    $this->load->helper('url');
    $compiler['language'] = $this->input->post('language');
    $rr=$this->menu->inpu($id);
    $compiler['input'] = $rr[0]['input'];
    $rrr=$this->menu->outputans($id);
    $compiler['output'] = $rrr[0]['output'];
    $compiler['code']=$_POST['code'];
    $submit = $this->input->post('submit');

    $api=$this->menu->api();


    $config['upload_path'] = './application/views/codemirror/contest/examples/';
    $config['allowed_types'] = '*';
    $config['max_size'] = '1000';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('codefile'))
    {

      if ($_POST['code']=='') {
  # code...
        $head=base_url()."index.php/main/contestquestion/".$id;
        $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
        $head;

        exit(header('Refresh: 0; URL=' . $redirect7));

      }

      if ($submit=="run") {
  # code...
        if ($api[0]['run']<=999) {

          $compiler['api']=$api[0]['api'];
  # code...
        }

        else if ($api[1]['run']<=999) {

          $compiler['api']=$api[1]['api'];
  # code...
        }
        else
        {

          $compiler['api']=$api[2]['api'];
        }
        $this->load->view('codemirror/contest/examples/runsource',$compiler);
        $this->menu->runapi($compiler['api']);


        $pdata11 = $this->session->userdata('code');
        $contestcodeupload['contestid']=$id;
        $contestcodeupload['user']=$pdata['username'];
        $contestcodeupload['code']=$compiler['code'];
        $contestcodeupload['status']=$pdata11['outputresult'];
        $contestcodeupload['type']="source";
        $this->db->insert('contestcode',$contestcodeupload);


        $contestlogic=$this->menu->contestlogic($id);
        $user = explode("*",$contestlogic[0]['user']);
        $chk=in_array($pdata['username'], $user);
        if ($chk==false)
        {
          if ($pdata11['outputresult']=="Accepted") {
            array_push($user,$pdata['username']);
            $fuf=implode("*", $user);
            $this->menu->logicsuccessful($id);
            $this->menu->logicsubmittion($id);
            $this->menu->logicuser($id,$fuf);
            $this->menu->logicscore($pdata['username']);
          }
          else
          {
           $this->menu->logicsubmittion($id);
         }

       }

     }
     else if ($submit=="compile") {
      if ($api[0]['compile']<=999) {

        $compiler['api']=$api[0]['api'];
  # code...
      }
      else if ($api[1]['compile']<=999) {

        $compiler['api']=$api[1]['api'];
  # code...
      }
      else
      {
        $compiler['api']=$api[2]['api'];
      }
      $this->load->view('codemirror/contest/examples/compilesource',$compiler);
      $this->menu->compileapi($compiler['api']);
  # code...
    }
    else
    {

      $head=base_url()."index.php/main/contestquestion/<?php echo $id;?>";
      $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
      $head;

      exit(header('Refresh: 0; URL=' . $redirect7));
    }
  }
  else
  {
    $data = array('upload_data' => $this->upload->data());
//file check
    $compiler['filecode'] =$data['upload_data']['file_name'];

    if ($submit=="run") {
  # code...
      if ($api[0]['run']<=999) {

        $compiler['api']=$api[0]['api'];
  # code...
      }

      else if ($api[1]['run']<=999) {

        $compiler['api']=$api[1]['api'];
  # code...
      }
      else
      {

        $compiler['api']=$api[2]['api'];
      }

      $this->load->view('codemirror/contest/examples/runfile',$compiler);
      $this->menu->runapi($compiler['api']);

      $pdata11 = $this->session->userdata('code');
      $contestcodeupload['contestid']=$id;
      $contestcodeupload['user']=$pdata['username'];
      $contestcodeupload['code']=$compiler['filecode'];
      $contestcodeupload['status']=$pdata11['outputresult'];
      $contestcodeupload['type']="file";
      $this->db->insert('contestcode',$contestcodeupload);
      $contestlogic=$this->menu->contestlogic($id);
      $user = explode("*",$contestlogic[0]['user']);
      $chk=in_array($pdata['username'], $user);
      if ($chk==false){
        if ($pdata11['outputresult']=="Accepted") {
          array_push($user,$pdata['username']);
          $fuf=implode("*", $user);
          $this->menu->logicsuccessful($id);
          $this->menu->logicsubmittion($id);
          $this->menu->logicuser($id,$fuf);
          $this->menu->logicscore($pdata['username']);
        }
        else
        {
         $this->menu->logicsubmittion($id);
       }

     }
   }
   else if ($submit=="compile") {
    if ($api[0]['compile']<=999) {

      $compiler['api']=$api[0]['api'];
  # code...
    }
    else if ($api[1]['compile']<=999) {

      $compiler['api']=$api[1]['api'];
  # code...
    }
    else
    {
      $compiler['api']=$api[2]['api'];
    }
    $this->load->view('codemirror/contest/examples/compilefile',$compiler);
    $this->menu->compileapi($compiler['api']);
  # code...

  }
  else
  {

    $head=base_url()."index.php/main/compiler";
    $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
    $head;

    exit(header('Refresh: 0; URL=' . $redirect7));
  }






}


// $this->load->view('codemirror/compiler');

// $this->load->view('dashhome');

// $createdby =  $_SESSION[logged_in['name']];

}
else
{

  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  exit(header('Refresh: 0; URL=' . $redirect7));
}
}

public function en()
{
	$dataen['en_video'] = $this->menu->en_video();
	$dataen['en_document'] = $this->menu->en_document();

	$dataen['en_document1'] = $this->menu->en_document1();
	$dataen['en_video1'] = $this->menu->en_video1();
	$this->load->view('en/en',$dataen);

}
public function report_d()
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin')
  {
    $doc=$this->menu->report_doc();


    $data = array('doc' =>$doc);
$this->load->view('report',$data);
  }

  else
  {


    header('Refresh: 0; URL=' . $redirect7);
  }


}

public function report_v()
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin')
  {

    $vi=$this->menu->report_vi();

    $data = array('vi' => $vi);
$this->load->view('reportv',$data);
  }

  else
  {


    header('Refresh: 0; URL=' . $redirect7);
  }


}

public function lab()
{
  $head=base_url();
  $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
  $head;

  $pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];

  if($pdata['rank']=='admin' || $pdata['rank']=='student')
  {
    $lab=$this->menu->fetch_lab();
        $data = array('lab' => $lab );
$this->load->view('lab',$data);
  }

  else
  {


    header('Refresh: 0; URL=' . $redirect7);
  }


}

}
