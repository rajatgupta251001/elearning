<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller {

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

    $this->load->model('mirror');
  }

	public function index()
	{
		$login=$this->input->post('login');
		  $pdata = $this->session->userdata('logged_in');
			if(isset($pdata)){
if($pdata['rank'] == "admin")
{
$this->admin_dash();
}
else {


			$this->main();
      }
			}
			else {

		if($login == 1)
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			  $y=$this->mirror->login($email,$password);
				if($y==2)
				{
					$err="Your Username or password is incorrect";
					$data = array('err' => $err );
					$this->load->view('mirror/login',$data);
				}
				else {
                $session_data = array(
				      'username' => $y[0]->username,
              'rank' =>$y[0]->rank,
              'password'=>$y[0]->password
				      );
				// Add user data in session
				    $this->session->set_userdata('logged_in', $session_data);
if ($y[0]->rank == "admin")
{
$this->admin_dash();
}
else
{

		$this->main();
  }
					}
				}

		else{
		$this->load->view('mirror/login');
	}
}
	}

  //***************************pass chnage***********************
  public function changepass()
  {
    $pdata = $this->session->userdata('logged_in');
    if($pdata['rank']=='admin' || $pdata['rank']=='student')
    {

      $this->load->view('mirror/changepass');

    }
    else
    {
$this->load->view('mirror/login');
    }
  }



  public function changepass1()
  {
    $pdata = $this->session->userdata('logged_in');
  // $createdby =  $_SESSION[logged_in['name']];
    if($pdata['rank']=='admin' || $pdata['rank']=='student')
    {

      $password1=$this->input->post('password1');
      $password2=$this->input->post('password2');

  if ($password2 != $password1 || !(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password2)) ) {
      # code...
  $this->changepass();
  }


  $this->mirror->changepass($pdata['username'],$password1);
  $this->load->view('mirror/changepass1');


  }

  else
  {
$this->load->view('mirror/login');
  }
  }




//*****************main**********************
public function main()
{
  $m=array("lab"=>$this->mirror->manager("LAb"),"contest"=>$this->mirror->manager('CONTEST'),"open"=>$this->mirror->manager('OPEN'));
  $this->load->view('mirror/manager',$m);
}


public function manager($manager)
{

  $m=array("ss"=>$this->mirror->manager_question($manager),"manager_detail"=>$this->mirror->manager_detail($manager),"manager"=>$manager);

  $this->load->view('mirror/main',$m);
}



public function mirror($manager,$id)
{
	$pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

								$m=array("ss"=>$this->mirror->get_question($id),"manager"=>$manager,"manager_detail"=>$this->mirror->manager_detail($manager));

				$this->load->view('mirror/mirror',$m);
}
else {
	$this->load->view('mirror/login');
}
}




public function compiler($manager)
{
	$pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){


    $language= $this->input->post('language');
    $ques_id= $this->input->post('quesid');
    $run= $this->input->post('run');
  $submit= $this->input->post('submit');

$code=$_POST['code'];
$input=$_POST['input'];
$date = date_timestamp_get(date_create());
if(isset($run))
{
    switch ($language) {
      case 'C':
        $result=$this->c($code,$input,$date);
        break;
        case 'CPP':
          $result=$this->cpp($code,$input,$date);
          break;
          case 'PYTHON':
            $result=$this->python($code,$input,$date);
            break;
            case 'PYTHON3':
              $result=$this->python3($code,$input,$date);
              break;
              case 'JAVA':
                $result=$this->java($code,$input,$date);
                break;
                case 'PHP':
                $result=$this->php($code,$input,$date);
                  break;

      default:
        echo "No language Selected";
        break;
    }

    echo "<pre>".$result."</pre>";
}
if (isset($submit)) {
  $test=$this->mirror->get_testcase($ques_id);
  $te=0;
  $ext="";
for($i=0;$i<count($test);$i++)
{
  $input =$test[$i]['input'];
$output =$test[$i]['output'];

    switch ($language) {
      case 'C':
        $result=$this->c($code,$input,$date);
        $ext="c";
        break;
        case 'CPP':
          $result=$this->cpp($code,$input,$date);
          $ext="cpp";
          break;
          case 'PYTHON':
            $result=$this->python($code,$input,$date);
            $ext="py";

            break;
            case 'PYTHON3':
              $result=$this->python3($code,$input,$date);
              $ext="py";

              break;
              case 'JAVA':
                $result=$this->java($code,$input,$date);
                $ext="java";

                break;
                case 'PHP':
                $result=$this->php($code,$input,$date);
                $ext="php";

                  break;

      default:
        echo "No language Selected";
        break;
    }
    $output1=(string)trim($output);
    $result1=(string)trim($result);
if(strcmp(trim($output),trim($result))==0 || strcmp(trim($output),trim($result))==768)
{
  $te++;
}

}
if(count($test)==$te)
{
echo "<code>Accepted<hr> Score: ".($te*10)."</code>";
$status="Accepted";
}
else
{
  $tr=count($test)-$te;
echo "<code>".$tr." Test Case Not Accepted <hr> Score: ".($te*10)."</code>";
$status=$tr." Test Case Not Accepted";
}
$file_name=$date."main.".$ext;
$ty=date("Y-m-d h:i:sa");
$sub = array('datetime'=>$ty,'ques_id' => $ques_id,'username'=>$pdata['username'],'lang'=>$language,'status'=>$status,'file_name'=>$file_name);
$this->db->insert('submittion',$sub);

$marks=$this->mirror->marks($pdata['username'],$ques_id);
if(count($marks) == 0)
{
  $ty=date("Y-m-d h:i:sa");
  $mark = array('datetime'=>$ty,'ques_id' => $ques_id,'username'=>$pdata['username'],'marks'=>$te*10,'manager'=>$manager);
  $this->db->insert('marks',$mark);
}
else {
  if($te*10 > $marks[0]['marks'])
  {
    $this->mirror->update_marks($pdata['username'],$ques_id,$te*10);
  }
}

}
}
else {
	$this->load->view('mirror/login');
}
}

public function subm()
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){
$d=$this->mirror->subm($pdata['username'],$_GET['ques_id']);
echo "<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table>
  <tr>
    <th>Filename</th>
    <th>Language</th>
    <th>Date / Time</th>
    <th>Status</th>
  </tr>";
for ($i=0; $i <count($d) ; $i++) {
echo"


  <tr>
  <td><a target=\"_blank\" href=\"".base_url()."files/".$d[$i]['file_name']." \">".$d[$i]['file_name']."</a></td>
  <td>".$d[$i]['lang']."</td>
  <td>".$d[$i]['datetime']."</td>
    <td>".$d[$i]['status']."</td>

  </tr>




";

}
echo "
</table>";

}
else {
	$this->load->view('mirror/login');
}
}


public function timer()
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){
  $time=0;
  $data = array('time' => $time );
  $this->mirror->update_timer($data,$pdata['username']);


  $head=base_url()."index.php/code/logout";
  echo "<script>location.replace(\"".$head."\");</script>";

}
else {
	$this->load->view('mirror/login');
}
}


public function leader($id)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){
$d=$this->mirror->leader($id);
echo "<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table>
  <tr>
    <th>Rank</th>
    <th>Username</th>
      <th>Score</th>
  </tr>";
for ($i=0; $i <count($d) ; $i++) {
echo"


  <tr>

  <td>".($i+1)."</td>
  <td>".$d[$i]['username']."</td>
  <td>".$d[$i]['mark']."</td>


  </tr>




";

}
echo "
</table>";

}
else {
	$this->load->view('mirror/login');
}
}

//*************************compiler*************
public function c($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){
    $CC="gcc";
    	$out="timeout 1s ./a.out";

    	$filename_code="files/".$date."main.c";
    	$filename_in="files/".$date."input.txt";
    	$filename_error="files/".$date."error.txt";
    	$executable="a.out";
    	$command=$CC." -lm ".$filename_code;
    	$command_error=$command." 2>".$filename_error;
    	if(trim($code)=="")
    	die("The code area is empty");

    	$file_code=fopen($filename_code,"w+");
    	fwrite($file_code,$code);
    	fclose($file_code);
    	$file_in=fopen($filename_in,"w+");
    	fwrite($file_in,$input);
    	fclose($file_in);
    	exec("chmod 777 $executable");
    	exec("chmod 777 $filename_error");

    	shell_exec($command_error);
    	$error=file_get_contents($filename_error);

    	if(trim($error)=="")
    	{
    		if(trim($input)=="")
    		{
    			$output=shell_exec($out);
    		}
    		else
    		{
    			$out=$out." < ".$filename_in;
    			$output=shell_exec($out);
    		}
        exec("rm $executable");
    		return($output);
    	}
    	else if(!strpos($error,"error"))
    	{
    		return($error);
    		if(trim($input)=="")
    		{
    			$output=shell_exec($out);
    		}
    		else
    		{
    			$out=$out." < ".$filename_in;
    			$output=shell_exec($out);
    		}
        exec("rm $executable");
    		return($output);
    	}
    	else
    	{
        exec("rm $executable");

    		return($error);
    	}
    	// exec("rm $filename_code");
    	// exec("rm *.o");
    	// exec("rm *.txt");



}
else {
	$this->load->view('mirror/login');
}
}




public function java($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

    $n=explode("class ",$code);
    $cl=explode("{",$n[1]);
    $clas=trim($cl[0]);

    $CC="javac";
  	$out="cd files && java ".$clas;
    	$filename_code="files/".$date."main.java";
    	$filename_in="files/".$date."input.txt";
    	$filename_error="files/".$date."error.txt";
      $executable="files/*.class";
      $runtime_file=$date."runtime.txt";
	$command=$CC." ".$filename_code;
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;
    	if(trim($code)=="")
    	die("The code area is empty");
      $file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("chmod 777 $executable");
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents("files/".$runtime_file);
			$output=shell_exec($out);
		}
		else
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents("files/".$runtime_file);
			$out=$out." < ".$date."input.txt";
			$output=shell_exec($out);
		}
    exec("rm $executable");
    	return("$output"."$runtime_error");

	}
	else if(!strpos($error,"error"))
	{
    exec("rm $executable");
		return($error);
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$date."input.txt";
			$output=shell_exec($out);
		}
    exec("rm $executable");
		return($output);
	}
	else
	{
    exec("rm $executable");
		return($error);
	}
  $delr=$clas."class";
    	exec("rm $delr");
}
else {
	$this->load->view('mirror/login');
}
}



public function python($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

    $CC="python";


    	// $out="timeout .5s ./a.out";
    	$filename_code="files/".$date."main.py";
    	$filename_in="files/".$date."input.txt";
    	$filename_error="files/".$date."error.txt";
    	// $executable="a.out";
      $command=$CC." ".$filename_code;
  	$command_error=$command." 2>".$filename_error." < ".$filename_in;
    	if(trim($code)=="")
    	die("The code area is empty");

      $file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	//exec("chmod 777 $executable");
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($command);
		}
		else
		{
			$command=$command." < ".$filename_in;
			$output=shell_exec($command);
		}
		return($output);
	}
	else
	{
		return($error);
	}
    	// exec("rm $filename_code");
    	// exec("rm *.o");
    	// exec("rm *.txt");
    	// exec("rm $executable");



}
else {
	$this->load->view('mirror/login');
}
}


public function python3($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

        $CC="python3";

        	// $out="timeout .5s ./a.out";
        	$filename_code="files/".$date."main.py";
        	$filename_in="files/".$date."input.txt";
        	$filename_error="files/".$date."error.txt";
        	// $executable="a.out";
          $command=$CC." ".$filename_code;
      	$command_error=$command." 2>".$filename_error." < ".$filename_in;
        	if(trim($code)=="")
        	die("The code area is empty");

          $file_code=fopen($filename_code,"w+");
    	fwrite($file_code,$code);
    	fclose($file_code);
    	$file_in=fopen($filename_in,"w+");
    	fwrite($file_in,$input);
    	fclose($file_in);
    	//exec("chmod 777 $executable");
    	exec("chmod 777 $filename_error");

    	shell_exec($command_error);
    	$error=file_get_contents($filename_error);

    	if(trim($error)=="")
    	{
    		if(trim($input)=="")
    		{
    			$output=shell_exec($command);
    		}
    		else
    		{
    			$command=$command." < ".$filename_in;
    			$output=shell_exec($command);
    		}
    		return($output);
    	}
    	else
    	{
    		return($error);
    	}
        	// exec("rm $filename_code");
        	// exec("rm *.o");
        	// exec("rm *.txt");
        	// exec("rm $executable");

}
else {
	$this->load->view('mirror/login');
}
}


public function cpp($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

    $CC="g++";

    	$out="timeout 1s ./a.out";
    	$filename_code="files/".$date."main.cpp";
    	$filename_in="files/".$date."input.txt";
    	$filename_error="files/".$date."error.txt";
    	$executable="a.out";
    	$command=$CC." -lm ".$filename_code;
    	$command_error=$command." 2>".$filename_error;
    	if(trim($code)=="")
    	die("The code area is empty");

    	$file_code=fopen($filename_code,"w+");
    	fwrite($file_code,$code);
    	fclose($file_code);
    	$file_in=fopen($filename_in,"w+");
    	fwrite($file_in,$input);
    	fclose($file_in);
    	exec("chmod 777 $executable");
    	exec("chmod 777 $filename_error");

    	shell_exec($command_error);
    	$error=file_get_contents($filename_error);

    	if(trim($error)=="")
    	{
    		if(trim($input)=="")
    		{
    			$output=shell_exec($out);
    		}
    		else
    		{
    			$out=$out." < ".$filename_in;
    			$output=shell_exec($out);
    		}
        exec("rm $executable");
    		return($output);
    	}
    	else if(!strpos($error,"error"))
    	{
    		return($error);
    		if(trim($input)=="")
    		{
    			$output=shell_exec($out);
    		}
    		else
    		{
    			$out=$out." < ".$filename_in;
    			$output=shell_exec($out);
    		}
        exec("rm $executable");

    		return($output);
    	}
    	else
    	{
        exec("rm $executable");

    		return($error);
    	}
    	// exec("rm $filename_code");
    	// exec("rm *.o");
    	// exec("rm *.txt");
    	// exec("rm $executable");



}
else {
	$this->load->view('mirror/login');
}
}



public function php($code,$input,$date)
{
  $pdata = $this->session->userdata('logged_in');
	if(isset($pdata)){

    $CC="php";

    	// $out="timeout .5s ./a.out";
    	$filename_code="files/".$date."main.php";
    	$filename_in="files/".$date."input.txt";
    	$filename_error="files/".$date."error.txt";
    	// $executable="a.out";
      $command=$CC." ".$filename_code;
  	$command_error=$command." 2>".$filename_error;
    	if(trim($code)=="")
    	die("The code area is empty");

      $file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	//exec("chmod 777 $executable");
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($command);
		}
		else
		{
			$command=$command." < ".$filename_in;
			$output=shell_exec($command);
		}
return($output);
	}
	else
	{
		return($error);
	}
    	// exec("rm $filename_code");
    	// exec("rm *.o");
    	// exec("rm *.txt");
    	// exec("rm $executable");

}
else {
	$this->load->view('mirror/login');
}
}
////************************compiler **********************
//********************admin*********************
public function admin_dash()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){
$this->load->view('mirror/admin/main');
}
else {
  $this->load->view('mirror/login');
}


}

public function admin_truncate()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){
$this->load->view('mirror/admin/truncate');
}
else {
  $this->load->view('mirror/login');
}


}

public function admin_report()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){
  $m=array("ss"=>$this->db->get('submittion')->result());



$this->load->view('mirror/admin/report',$m);
}
else {
  $this->load->view('mirror/login');
}


}


public function admin_question()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){

  $submit=$this->input->post('add_ques');
  if($submit == "Submit")
  {

    $heading=$this->input->post('heading');
    $sample_input=$this->input->post('sample_input');
    $sample_output=$this->input->post('sample_output');
    $question=$_POST['question'];
    $insert_data = array('heading'=>$heading,'question'=>$question,'sample_input'=>$sample_input,'sample_output'=>$sample_output);
  $this->db->insert('Question',$insert_data);
  }


  $submit1=$this->input->post('add_case');
  if($submit1 == "Submit")
  {

    $ques_id=$this->input->post('ques_id');
    $input=$this->input->post('sample_input');
    $output=$this->input->post('sample_output');

    $insert_data = array('ques_id'=>$ques_id,'input'=>$input,'output'=>$output);
  $this->db->insert('testcase',$insert_data);
  }


  $m=array("ss"=>$this->db->get('Question')->result());
$this->load->view('mirror/admin/question',$m);
}
else {
  $this->load->view('mirror/login');
}


}


public function admin_user()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){

$submit=$this->input->post('submit');
if($submit == "Submit")
{
  $user=explode(";",$this->input->post('user'));
  $pass=$this->input->post('password');
  $time=$this->input->post('minutes');

  foreach ($user as $value) {
if($value != '')
{
  $dta = array('username' => $value,'password'=> $pass,'time' => $time );
  $this->db->insert('login',$dta);
}
}
}

  $m=array("ss"=>$this->db->get('login')->result());
$this->load->view('mirror/admin/user',$m);
}
else {
  $this->load->view('mirror/login');
}


}

public function delete()
{

//admin home page   ***************************************
$pdata = $this->session->userdata('logged_in');
if($pdata['rank']=="admin"){

$but=$this->input->post('but');
if($but == "submittion")
{
  $this->db->truncate('submittion');
  $this->db->truncate('marks');
  echo "submittion Table Truncated Successfully";
}

if($but == "question")
{
  $this->db->truncate('Question');
  $this->db->truncate('testcase');
  echo "Question Table Truncated Successfully";
}

if($but == "login")
{
  $this->mirror->delete_login();

  echo "Login Table Truncated Successfully";
}

}
else {
  $this->load->view('mirror/login');
}


}

//**************************admin*******************
//*******************main************************
	public function logout() {
        $pdata = $this->session->userdata('logged_in');

//        if(isset($pdata)){
//            $time=0;
//            $data = array('time' => $time );
//            $this->mirror->update_timer($data,$pdata['username']);
//        }

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



}
