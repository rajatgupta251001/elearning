<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'fixed/header.php';?>
<div class="content-push">

                <div class="information-blocks">
 <div class="row">
                        <div class="col-md-3 information-entry blog-sidebar">
<div class="information-blocks categories-border-wrapper">

      
                                <div class="block-title size-3">Semester</div>
                                <div class="accordeon">
                                  
                                            <?php foreach($semester as $a) {
                                                if($a->course==$dashcourse && $a->branch==$dashbranch)
                                                {
                                                ?>
                                    <div class="accordeon-title"><?php echo $a->semester;?></div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">




<ul>
                                        <?php foreach($subject as $aa) {


                                  if($aa->course==$dashcourse && $aa->branch==$dashbranch && $a->semester==$aa->semester)
                              {
                                          ?>
                                            <li>               
 <a href="<?php echo base_url();?>index.php/maindocument/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>"><?php echo $aa->subject;?></a>
                                                          </li>
                                                         
                                                            <?php }}?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
</div>


  <div class="col-md-9 information-entry">
    <div class="information-blocks">

            <div class="breadcrumb-box dark" itemprop="breadcrumb">
               
                                   <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><?php echo $dashcourse?></a>
                                   <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><?php echo $dashbranch?></a>                     
            </div>
     


    Latest Updates
                              <!--   <div class="accordeon">



   <?php foreach($course as $a) {?>


                                    <div class="accordeon-title"><?php echo $a->course;?></div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            <p>



 <?php foreach($branch as $aa) {


                                  if($a->course == $aa->course)
                              {
                                          ?>

 
                                
                                <div><a href="<?php echo base_url();?>index.php/maindocument/dashbranch/<?php echo $a->course;?>/<?php echo $aa->branch;?>"><p ><?php echo $aa->branch;?></p></a></div>
                          







<?php }}?>  </p>
                                        </div>
                                    </div>
                                <?php }?> 


             

                                </div> -->
                            </div>
            






       



            </div>
            </div>

            </div>

                            <div style="height: 60px;"></div>
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









<!-- 
                <div class="large-8 columns profile-inner">
                  <section class="submit-post">
                        <div class="row secBg">


                            <div class="large-12 columns">
                                <div class="heading">
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                                <div class="row">
                                    <div class="large-12 columns">






   <?php foreach($semester as $a) {
                                                if($a->course==$dashcourse && $a->branch==$dashbranch)
                                                {
                                                ?>


  <section id="category">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="column row">
                            <div class="heading category-heading clearfix">
                                <div class="cat-head pull-left">
                                    <i class="fa fa-folder-open"></i>
                                    <h4><?php echo $a->semester;?></h4>
                                </div>
                            <div>
                                <div class="navText pull-right show-for-large">
                                    <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                    <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="owl-demo-cat" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="4000" data-auto-width="true" data-margin="10" data-dots="false">
<?php foreach($subject as $aa) {


                                  if($aa->course==$dashcourse && $aa->branch==$dashbranch && $a->semester==$aa->semester)
                              {
                                          ?>


                            <div class="item-cat item thumb-border">
                                <figure class="premium-img">
                                    <img src="<?php echo base_url();?>assets/dashboardvideo/images/category/phddoc.jpg">
                                    <a href="<?php echo base_url();?>index.php/maindocument/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>" class="hover-posts">
                                        <span><i class="fa fa-edit"></i></span>
                                    </a>
                                </figure>
                                <div style="word-wrap: break-word;width: 180px;"><a href="<?php echo base_url();?>index.php/maindocument/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>"><p ><?php echo $aa->subject;?></p></a></div>
                            </div>
                           
                          <?php }}?>
                            
                        </div>
                       
                    </div>
                </div>
                
            </section>

<?php }}?>





                                    </div>
                                    </div>
                                    </div>


                                    </div>
                                    </section>
                                    </div>
                                    </div>
                    



                </div>
            </div>
 -->
              
  