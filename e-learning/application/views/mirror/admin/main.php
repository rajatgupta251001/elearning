<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">



                <a class="tab-switcher">Leaders board</a>


                <div class="clear"></div>
            </div>




        </div>
        <div>
          
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">

                        <div class="col-md-12 information-entry" id="subm">
<center><img src="<?php echo base_url();?>assets/loader.gif" /></center>
                            </ul>
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
<script>
setInterval(ajaxCall, 5000); //300000 MS == 5 minutes

function ajaxCall() {
  $.ajax({url: "<?php echo base_url();?>index.php/code/leader",
  success: function(result){
     $("#subm").html(result);
 }});
}
</script>
</body>
</html>
