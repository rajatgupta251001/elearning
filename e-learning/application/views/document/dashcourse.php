<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'fixed/header.php';?>
<div class="content-push">

  <div class="information-blocks">
    <div class="row">
      <div class="col-md-3 information-entry blog-sidebar">
        <div class="information-blocks categories-border-wrapper">


          <div class="block-title size-3">Courses</div>
          <div class="accordeon">
            <?php foreach($course as $a) {?>
              <div class="accordeon-title"><?php echo $a->course;?></div>
              <div class="accordeon-entry">
                <div class="article-container style-1">

                  <ul>

                    <?php foreach($branch as $aa) {


                      if($a->course == $aa->course)
                      {
                        ?>

                        <li>
                          <a href="<?php echo base_url();?>index.php/maindocument/dashbranch/<?php echo $a->course;?>/<?php echo $aa->branch;?>"><?php echo $aa->branch;?></a>
                        </li>

                      <?php }}?>
                    </ul>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>


        <div class="col-md-9 information-entry">
          <div class="information-blocks">




            Latest Updates
            <div class="col-md-12 information-entry">
              <div class="blog-landing-box type-4 columns-2">
                <?php foreach($notifi as $noti) {?>
                  <div class="blog-entry">
                    <a class="image hover-class-1" href="#"><img src="img/blog-thumbnail-4.jpg" alt="" /><span class="hover-label">Read More</span></a>
                    <div class="date"><?php echo date('d',strtotime($noti->cre));?> <span><?php echo date('M',strtotime($noti->cre));?> </span></div>
                    <div class="content">
                      <a class="title" href="<?php echo $noti->link;?>">New Document</a>
                      <div class="subtitle">Posted by <a href="#"><b><?php echo $noti->admin;?></b></a></div>
                      <div class="description"><?php echo $noti->subject;?></div>
                      <a class="readmore" href="<?php echo $noti->link;?>">read more</a>
                    </div>
                  </div>
                <?php }?>

              </div>
            </div>





          </div>




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
