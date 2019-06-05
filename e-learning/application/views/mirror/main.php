<?php

include 'fixed/header.php';?>

<div class="information-blocks">
  <a href="<?php echo base_url();?>" class="button style-4">Back To Main</a>

    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
                <a class="tab-switcher active">Question</a>


                <a class="tab-switcher">Leaders board</a>


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
$i=1;
foreach ($ss as $ke) {
  # c
  echo $i.")&nbsp;";
  $i++;
  ?>

  <a href="<?php echo base_url();?>index.php/code/mirror/<?php echo $manager;?>/<?php echo $ke->ques_id;?>#ambiance"><?php echo $ke->heading;?></a><hr>


  <?php
}

 ?>
</table>

                          </div>
                      </div>


                    </div>
                </div>
            </div>




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
<?php include 'fixed/footer.php';
?>

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
  $.ajax({url: "<?php echo base_url();?>index.php/code/leader/<?php echo $manager;?>",
  success: function(result){
     $("#subm").html(result);
 }});
}
</script>
</body>
</html>
<?php if ($pdata['rank']=="student") {
	$m=$manager_detail[0]->end;

?>
<script>
var countDownDate = new Date("<?php echo $m;?>").getTime();
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
		document.getElementById("subm1").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";


    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        location.replace("<?php echo base_url();?>");
    }
}, 1000);
</script>
<?php }?>
