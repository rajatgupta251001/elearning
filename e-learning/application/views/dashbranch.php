<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/css/layerslider.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.theme.default.min.css">
<?php include 'fixed/header-dashbranch.php';?>
<br><br><br><br><br><br><br><br><br><br>
<div class="content-push" style="padding:10px;">
<div class="information-blocks">
    <div class="row">
<!--
    <section class="topProfile topProfile-inner" style="background: url('<?php echo base_url();?>assets/dashboardvideo/images/banner.jpg') no-repeat;background-size: 100% 100%; ">
      <div class="profile-stats">
        <div class="row secBg">
          <div class="large-12 columns">
            <div class="profile-author-img">
              <img src="<?php echo base_url();?>assets/dashboardvideo/images/e-learning.jpg" alt="profile author img">
            </div>


            <div class="profile-share">
              <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://www.kiet.edu/e-learning">

                <button data-easyshare-button="facebook">
                  <span class="fa fa-facebook"></span>
                  <span>Share &nbsp; </span>
                </button>



                <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                  <span class="fa fa-twitter"></span>
                  <span>Tweet&nbsp;&nbsp;</span>
                </button>

                <button data-easyshare-button="google">
                  <span class ="fa fa-google-plus"></span>
                  <span>+1</span>
                </button>

                <div data-easyshare-loader>Loading...</div>
              </div>
            </div>

            <div class="clearfix">
              <div class="profile-author-name float-left">

                <h4><?php $pdata = $this->session->userdata('logged_in');
                echo $pdata['username'];?></h4>
                <p>Rank : <span><?php $pdata = $this->session->userdata('logged_in');
                echo $pdata['rank'];?></span></p>
              </div>


            </div>
          </div> -->
        </div>
      </div>
    </section>
    <div class="row">

              <div class="col-md-3 information-entry blog-sidebar">
                <div class="information-blocks categories-border-wrapper">


                  <div class="block-title size-3">Courses</div>
                  <div class="accordeon">
                  <?php foreach($semester as $a) {
                      if($a->course==$dashcourse && $a->branch==$dashbranch)
                      {
                      ?>
                      <div class="accordeon-title"><?php echo $a->semester;?></div>
                      <div class="accordeon-entry">
                        <div class="article-container style-1">

                          <ul style="list-style:none;">
                          <?php foreach($subject as $aa) {


                          if($aa->course==$dashcourse && $aa->branch==$dashbranch && $a->semester==$aa->semester)
                          {
                            ?>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/main/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>/<?php echo $videotype;?>"><?php echo $aa->subject;?></a>
                                </li>

                              <?php }}?>
                            </ul>
                          </div>
                        </div>
                      <?php }}?>
                    </div>
                  </div>
                </div>


                <div class="col-md-8 information-entry blog-sidebar">
                  <div class="information-blocks categories-border-wrapper">
                  <div class="row" style="padding:10px;">
                      <font size="5" style="display:inline-flex">  <i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;
                        <a href="<?php echo base_url();?>index.php/main/dashcourse/<?php echo $videotype;?>"><h4><?php echo $dashcourse?></h4></a>/
                        <a href="<?php echo base_url();?>index.php/main/dashcourse/<?php echo $videotype;?>"><h4><?php echo $dashbranch?></h4></a>
                      </font>
                 </div>
                 <hr>
                      <div class="row" style="padding:10px;">

                           <?php foreach($semester as $a) {
                                                                        if($a->course==$dashcourse && $a->branch==$dashbranch)
                                                                        {
                                                                        ?>
                                    <div class="heading category-heading clearfix">
                                      <div class="cat-head pull-left">
                                       <font size="5" style="display:inline-flex">
                                        <i class="fa fa-folder-open"></i>

                                        <h4><?php echo $a->semester;?></h4>
                                      </font>
                                      </div>
                                      <div>
                                        <div class="navText pull-right show-for-large">
                                          <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                          <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                  <div id="owl-demo-cat" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="true" data-autoplay="true" data-autoplay-timeout="1000" data-auto-width="false" data-margin="10" data-dots="false">
                                    <?php foreach($subject as $aa) {


                                                                      if($aa->course==$dashcourse && $aa->branch==$dashbranch && $a->semester==$aa->semester)
                                                                  {
                                                                              ?>

                                        <div class="item-cat item thumb-border" style="margin-bottom:30px;">
                                          <font size="1"><?php echo $aa->subject;?></font>
                                          <br>
                                          <figure class="premium-img" style="height:130px;">

                                            <a href="<?php echo base_url();?>index.php/main/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>/<?php echo $videotype;?>" class="hover-posts">
                                          <img src="<?php echo base_url();?>assets/dashboardvideo/images/category/phd.jpg">
                                            </a>
                                          </figure>

                                        </div>
                                      <?php }}?>
                                     </div>


                              <?php }}?>



                          </div>




                </div>




              </div>






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

<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/what-input/what-input.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/foundation-sites/dist/foundation.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/jquery.showmore.src.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/greensock.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/inewsticker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/jquery.kyco.easyshare.js" type="text/javascript"></script>
