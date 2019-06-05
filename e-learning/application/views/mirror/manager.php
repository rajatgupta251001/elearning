<?php include 'fixed/header_main.php';

?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
                <a class="tab-switcher active">Lab</a>
                <a class="tab-switcher">Contest</a>
                <a class="tab-switcher">Open Coding</a>


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
foreach ($lab as $ke) {
  # c

  ?>

  <a style="font-size:1.5em;" href="<?php echo base_url();?>index.php/code/manager/<?php echo $ke->id;?>"><?php   echo $i.")&nbsp;";
    $i++; echo $ke->Name;?></a><hr>


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



                      <div class="information-blocks">
                          <div class="categories-list">

          <?php
          $i=1;
          foreach ($contest as $ke) {


          if($ke->end >= date("Y-m-d H:i:s")){


          ?>

          <a style="font-size:1.5em;" href="<?php
          if($ke->start >= date("Y-m-d H:i:s")){
          echo "#";}else{echo base_url();?>index.php/code/manager/<?php echo $ke->id;}

          ?>"><?php echo $i.")&nbsp;";
          $i++;echo $ke->Name;?></a>
&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <span style="background-color:green;border-radius:1px;color:white;font-size:1.5em;">Start At:&nbsp &nbsp &nbsp<?php echo $ke->start;?></span>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
 <span style="background-color:green;border-radius:1px;color:white;font-size:1.5em;">End At:&nbsp &nbsp &nbsp<?php echo $ke->end;?></span>

          <hr>


          <?php
          }
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



                      <div class="information-blocks">
                          <div class="categories-list">

          <?php
          $i=1;
          foreach ($open as $ke) {
          # c

          ?>
          <a style="font-size:1.5em;" href="<?php echo base_url();?>index.php/code/manager/<?php echo $ke->id;?>"><?php   echo $i.")&nbsp;";
            $i++; echo $ke->Name;?></a><hr>


          <?php
          }

          ?>
          </table>

                          </div>
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
</body>
</html>
