<?php include 'fixed/header.php';?>
<div class="content-push">



   <div class="information-blocks">
       <a href="<?php echo base_url();?>" class="button style-4">Document</a>&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="<?php echo base_url();?>index.php/main/search_home" class="button style-3">Video & Animation</a>

       <div class="row">
           <div class="col-md-12 information-entry">
               <center><h5 style="font-size: 4em;">E-Learning</h5></center>
           </div>
           <div class="col-md-6 information-entry" style="float: right;font-size: 2em;">
              <p>Document</p>
          </div>

      </div>
      <?=form_open_multipart('index.php/main/search_document')?>
      <div class="class=col-md-12 information-entry" style="margin: 4em;">
          <input class="simple-field" type="text" placeholder="Enter Query" value="" name="search" />


      </div>
      <div class="class=col-md-12 information-entry" style="margin-bottom:2em; ">
        <center>
            <button type="submit" class="button style-3 ">Document Search</button>

        </center>  
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
