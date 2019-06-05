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
self.location='<?php echo base_url();?>index.php/maindocument/upload/'+ddddd+"/" +dddd+"/"+ddd+"/"+dd;
}

    </script>
<div class="content-push">

     <div class="information-blocks">
         <div class="row">
             <div class="col-md-3 information-entry">
                     <aside class="secBg sidebar">
                         <div class="row">
                                 <div class="widgetBox">
                                     <div class="widgetTitle">
                                         <h5>Profile Overview</h5>
                                     </div>
                                     <div class="widgetContent">
                                         <ul class="profile-overview">


                                             <li class="clearfix"><a href="<?php echo base_url();?>index.php/maindocument/profilevideo"><i class="fa fa-pencil"></i>Documents<span class="float-right"><?php  echo $admin[0]->upload;?></span></a></li>


                                             <li class="clearfix"><a href="<?php echo base_url();?>index.php/main/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                                         </ul>
                                       <br>
                                         <a href="<?php echo base_url();?>index.php/maindocument/upload/BTECH/BIO_TECH/I/WEB" class="button" style="background:black;border:0px;color:white"><i class="fa fa-plus-circle"></i>Submit Document</a>
                                     </div>
                                 </div>

                         </div>
                     </aside>

             </div>
             <div class="col-md-8 information-entry" style="margin-left:20px;">
                                   <section class="submit-post">
                                               <div class="heading">

                                                   <h4> <i class="fa fa-pencil-square-o"></i> Add new Document Post</h4>

                                               </div>
                                               <br>
                                               <div class="row">


                                                       <form data-abide novalidate action="<?php echo base_url();?>index.php/maindocument/upload1" method="POST" enctype="multipart/form-data">
                                                           <div data-abide-error class="alert callout" style="display: none;">
                                                               <p><i class="fa fa-exclamation-triangle"></i>
                                                                   There are some errors in your form.</p>
                                                           </div>
                                                           <div class="row">

                                                              <div class="form-group">
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
                                                                   </label>
                                                                  <br>
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
                                                                   </label>
                                                                  <br>
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
                                                                   </label>
                                                                    <br>

                                                               <label>Subject
                                                                  <select class="form-control" onchange="reload(this.form)" required name="ajax_subject" id="ajax_subject">
                                                                  <option value="sub">Select Subject</option>
                                                               <?php foreach ($subject as $subjec) {
                                                                   if(($subjec->course == $ajax_course )&&($subjec->branch==$ajax_branch)&&($subjec->semester==$ajax_semester))
                                                                   {
                                                                        if ($subjec->subject==@$ajax_subject) {
                                                                           # code...

                                                                   ?>

                                                               <option class="form-control" selected value="<?php echo $subjec->subject;?>" >

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
                                                                   </label>
                                                                     <br>


                                                               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">


                                                                   <label>Title
                                                                       <input class="form-control" type="text" placeholder="enter you document title..." required name="title">
                                                                       <span class="form-error">
                                                                           Yo, you had better fill this out, it's required.
                                                                       </span>
                                                                   </label>
                                                                      <br>

                                                                   <label>Type
                                                                       <select class="form-control" name="type">
                                                                           <option>WORD</option>
                                                                           <option>PDF</option>
                                                                           <option>PPT</option>
                                                                           <option>EXCEL</option>


                                                                       </select>
                                                                       <span class="form-error">
                                                                           Yo, you had better fill this out, it's required.
                                                                       </span>
                                                                   </label>
                                                                    <br>





                                                                   <label>Embedded
                                                                       <textarea name="embedded" required placeholder="enter you document embedded code..."></textarea>
                                                                   </label>
                                                                   <br>
                                                               <div class="large-12 columns">
                                                                   <h6 class="borderBottom">How to get Document Embedded Code:</h6>
                                                                   <p><strong>Note:</strong>
                                                                   <br>1. Please open your google drive and upload the document.
                                                                   <br>2. Right Click on the  document file(get shareable link).
                                                                   <br>3. Paste the link Here.


                                                                   </p>
                                                               </div>




                                                             </div>
                                                               </div>

                                                               <div class="large-12 columns">
                                                                   <button class="button expanded" type="submit" name="submit" value="submit"  style="background:black;border:0px;color:white">publish now</button>
                                                               </div>

                                                       </form>

                                                   </div>
                                              <br>

                                   </section>
                               </div>
                           </div>

             </div>
        </div>
      </form>
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
