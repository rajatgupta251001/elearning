<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
 foreach($video as $vide)
{
if($vide->sno == $embedded)
{

$head= html_entity_decode($vide->embedded);;
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head;
echo base64_encode($head);
header('Refresh: 0; URL=' . $redirect7);

}
} 
?>