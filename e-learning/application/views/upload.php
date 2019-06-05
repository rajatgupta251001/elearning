<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/app.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/css/layerslider.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/responsive.css">
<?php include 'fixed/header.php';?>

<script type="text/javascript">
    function reload(form)
{
var ddddd=document.getElementById("ajax_course").value;
var dddd=document.getElementById("ajax_branch").value;
var ddd=document.getElementById("ajax_semester").value;
var dd=document.getElementById("ajax_subject").value;
if (ddddd == null)
{
ddddd="BTECH";
}
if (dddd == null)
{
dddd="CSE";
}
if (ddd == null || ddd== undefined)
{
ddd="I";
}
if (dd == null)
{
dd="WT";
}
self.location='<?php echo base_url();?>index.php/main/upload/'+ddddd+"/" +dddd+"/"+ddd+"/"+dd;
}

</script>
<div class="content-push">

     <div class="information-blocks">
         <div class="row">
             <div class="col-md-3 information-entry">
                     <aside class="secBg sidebar">
                         <div class="row">
                           <div class="row">

                      <div class="large-12 columns">
                          <div class="widgetBox">
                              <div class="widgetTitle">
                                  <h5>Profile Overview</h5>
                              </div>
                              <div class="widgetContent">
                                  <ul class="profile-overview">


                                      <li class="clearfix"><a href="<?php echo base_url();?>index.php/main/profilevideo"><i class="fa fa-video-camera"></i>Videos <span class="float-right"><?php  echo $admin[0]->upload;?></span></a></li>
                                      <li class="clearfix"><a href="<?php echo base_url();?>index.php/main/commingsoon"><i class="fa fa-users"></i>Followers<span class="float-right"><?php  echo $admin[0]->followers;?></span></a></li>
                                      <li class="clearfix"><a href="<?php echo base_url();?>index.php/main/commingsoon"><i class="fa fa-comments-o"></i>comments<span class="float-right"><?php  echo $admin[0]->comment;?></span></a></li>

                                      <li class="clearfix"><a href="<?php echo base_url();?>index.php/main/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                                  </ul>
                                  <br>
                                  <a href="<?php echo base_url();?>index.php/main/upload/BTECH/BIO_TECH/I/WEB" class="button" style="background:black;border:0px;color:white"><i class="fa fa-plus-circle"></i>Submit Video</a>
                              </div>
                          </div>
                      </div>
                  </div>

                         </div>
                     </aside>

             </div>
             <div class="col-md-8 information-entry" style="margin-left:20px;">
               <section class="submit-post">
             <div class="heading">
                 <i class="fa fa-pencil-square-o"></i>
                 <h4>Add new video Post</h4>
             </div>
             <div class="row">
                     <form data-abide novalidate action="<?php echo base_url();?>index.php/main/upload1" method="POST" enctype="multipart/form-data">
                         <div data-abide-error class="alert callout" style="display: none;">
                             <p><i class="fa fa-exclamation-triangle"></i>
                                 There are some errors in your form.</p>
                         </div>
                         <div class="row">


                             <label>Course
                                <select class="form-control" onchange="reload(this.form)" required name="ajax_course" id="ajax_course">

                             <?php
                             foreach ($course as $cours)
                             {
                                 if($cours->course ==@$ajax_course)
                                 {
                                 ?>

                             <option selected value="<?php echo $cours->course;?>">
                                       <?php echo $cours->course;?>
                                     </option>

                                     <?php
                                      }
                                      else
                                      {

                                         ?>
                                     <option value="<?php echo $cours->course;?>">
                                       <?php echo $cours->course;?>
                                     </option>


                                 <?php
                                 }
                                  }


                                  ?>
                                 </select>
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label><br>





                             <label>Branch
                                <select class="form-control" onchange="reload(this.form)" required name="ajax_branch" id="ajax_branch">
                                <option value="I">Select Branch</option>
                             <?php foreach ($branch as $branc) {

                                 if($branc->course == $ajax_course)
                                 {
                                     if($branc->branch ==@$ajax_branch)
                                 {
                                 ?>

                             <option selected value="<?php echo $branc->branch;?>" >

                                       <?php echo $branc->branch;?>
                                     </option>
                                         <?php }else{?>
                                             <option value="<?php echo $branc->branch;?>" >

                                       <?php echo $branc->branch;?>
                                     </option>
                                 <?php }}
                                 }?>
                                 </select>
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label><br>





                             <label>Semester
                                <select class="form-control" onchange="reload(this.form)" required name="ajax_semester" id="ajax_semester">
                                <option value="C">Select Semester</option>
                             <?php foreach ($semester as $semeste) {
                                 if(($semeste->course == $ajax_course)&&($semeste->branch== $ajax_branch))
                                 {
                                     if ($semeste->semester==@$ajax_semester) {
                                         # code...

                                 ?>

                             <option selected value="<?php echo $semeste->semester;?>" >

                                       <?php echo $semeste->semester;?>
                                     </option>
                                     <?php }else{?>
                                         <option value="<?php echo $semeste->semester;?>" >

                                       <?php echo $semeste->semester;?>
                                     </option>
                                 <?php }}
                                 }?>
                                 </select>
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label><br>



                             <label>Subject
                                <select class="form-control" onchange="reload(this.form)" required name="ajax_subject" id="ajax_subject">
                                <option value="sub">Select Subject</option>
                             <?php foreach ($subject as $subjec) {
                                 if(($subjec->course == $ajax_course )&&($subjec->branch==$ajax_branch)&&($subjec->semester==$ajax_semester))
                                 {
                                      if ($subjec->subject==@$ajax_subject) {
                                         # code...

                                 ?>

                             <option selected value="<?php echo $subjec->subject;?>" >

                                       <?php echo $subjec->subject;?>
                                     </option>
                                     <?php }else{?>
                                         <option value="<?php echo $subjec->subject;?>" >

                                       <?php echo $subjec->subject;?>
                                     </option>
                                 <?php }}
                                 }?>
                                 </select>
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label><br>


                             <label>Topic
                                <select  class="form-control" name="topic">
                                   <option value="">Select Topic</option>
                             <?php foreach ($video as $vide) {
                                 if(($vide->course == $ajax_course )&&($vide->branch==$ajax_branch)&&($vide->semester==$ajax_semester)&&($vide->subject==$ajax_subject)&&($vide->subject==$ajax_subject))
                                 {

                                 ?>

                             <option value="<?php echo $vide->topic;?>" >

                                       <?php echo $vide->topic;?>
                                     </option>
                                     <?php }
                                 }?>
                                 </select>
                                    </label><br>
                                    <p><strong>OR</strong></p>
                                    <input type="text" name="topic1" placeholder="enter the new topic pls use capital case">

                             <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                             <label>Subtopic
                                <select  name="subtopic">
                          <option value="">Select Subtopic</option>
                             <?php foreach ($video as $vide) {
                                 if(($vide->course == $ajax_course )&&($vide->branch==$ajax_branch)&&($vide->semester==$ajax_semester)&&($vide->subject==$ajax_subject)&&($vide->subtopic !=''))
                                 {

                                 ?>

                             <option value="<?php echo $vide->subtopic;?>" >

                                       <?php echo $vide->subtopic;?>
                                     </option>
                                     <?php }
                                 }?>
                                 </select>
                                    </label><br>
                                    <p><strong>OR</strong></p>
                                    <input class="form-control" type="text" name="subtopic1" placeholder="enter the new subtopic pls use capital case">

                                 <label>Title
                                     <input class="form-control" type="text" placeholder="enter you video title..." required name="title">
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label><br>


                                 <label>Subtitle
                                     <input class="form-control" type="text" placeholder="enter you video subtitle..."  name="subtitle">
                                     <span class="form-error">
                                         Yo, you had better fill this out, it's required.
                                     </span>
                                 </label>



                                 <label>Description
                                     <textarea class="form-control" name="description" required placeholder="enter you video Description..." maxlength="100"></textarea>
                                 </label><br>



                                 <label>Source
                                     <select class="form-control" name="source" required>
                                     <option>youtube</option>
                                     <option>drive</option>
                                     </select>
                                 </label><br>


                                 <label>Video Type
                                     <select class="form-control" name="videotype" required>
                                     <option>Annimation</option>
                                     <option>video</option>
                                     </select>
                                 </label><br>


                                 <label>Embedded
                                     <textarea class="form-control" name="embedded" required placeholder="enter you video embedded code..."></textarea>
                                 </label><br>


                                 <h6 class="borderBottom">How to get Video Embedded Code:</h6>
                                 <p><strong>Note:</strong> Please open one of the video on youtube ,down the video there is share button:  Share> Embedded > Video File URL.copy and paste it</p>



                                 <label>Length of video
                                     <input class="form-control" name="length" required placeholder="enter you video length (time)..."></input>
                                 </label><br>





                             </div>

                             <div class="large-12 columns">
                                 <button class="button expanded" type="submit" name="submit" value="submit" style="background:black;border:0px;color:white">publish now</button>
                             </div>

                     </form>

                 </div>

  <br>
     </div>
 </section>
</div>
</div>
</div>
</div>

<!-- FOOTER -->
<?php include 'fixed/footer.php';?>

</div>

<div class="clear"></div>

<script src="<?php echo base_url();?>assets/theme/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/idangerous.swiper.min.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/global.js"></script>

<!-- custom scrollbar -->
<script src="<?php echo base_url();?>assets/theme/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/theme/js/jquery.jscrollpane.min.js"></script>
</body>
</html>
