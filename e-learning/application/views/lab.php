<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">

            <div class="list">
                <a class="tab-switcher active">Labs</a>
                <?php
                $pdata = $this->session->userdata('logged_in');

                if($pdata['rank']=='admin')
                {
                   ?>
                <a class="tab-switcher">Insert  Labs</a>
                <a class="tab-switcher">Delete  Labs</a>
              <?php }?>
                <div class="clear"></div>
            </div>
        </div>
        <div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">



                      <div class="information-blocks">
                          <div class="categories-list">



                                <?php
                                $i=0;
                                while ($lab[$i]) {
                                  # code...



                      ?>
                    <b><?php echo $i+1;?>)</b> &nbsp;&nbsp;  <a href=""><?php  echo $lab[$i]->lab_name;?></a><hr>

                                  <?php
                                  $i++;
                                }
                                ?>

                          </div>
                      </div>


                    </div>
                </div>
            </div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">

                        <div class="col-md-6 information-entry">
                          insert labs
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">
                        <div class="col-md-12 information-entry">

                                                          <?php
                                                          $i=0;
                                                          while ($lab[$i]) {
                                                            # code...



                                                ?>
                                              <b><?php echo $i+1;?>)</b> &nbsp;&nbsp;  <?php  echo $lab[$i]->lab_name;?><span style="float:right;"><i class="fa fa-trash"></i></span><hr>

                                                            <?php
                                                            $i++;
                                                          }
                                                          ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>


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
