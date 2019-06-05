<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98599361-1', 'auto');
  ga('send', 'pageview');

</script>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$redirect5 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
"dashsuper";
 $redirect9 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
"dashstudent";
 $redirect10 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
"dashadmin";

 $redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
"retry";

$pdata = $this->session->userdata('logged_in');
// $createdby =  $_SESSION[logged_in['name']];
$u=$pdata['username']."@kiet.edu";
$p=$pdate['password']."@#$%^CNsdvn1452";
                     echo '          
<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAfjOHJ1CkdIoyqtwV762GQy1c43Xv5Mtw",
    authDomain: "e-learning-kiet.firebaseapp.com",
    databaseURL: "https://e-learning-kiet.firebaseio.com",
    projectId: "e-learning-kiet",
    storageBucket: "e-learning-kiet.appspot.com",
    messagingSenderId: "537631826468"
  };
</script>
    ';
?>

  <script>

    firebase.initializeApp(config);
    firebase.auth().createUserWithEmailAndPassword('<?php echo $u; ?>', '<?php echo $p; ?>').catch(function(error) {
   });



      </script>
<?php
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
?>