<?php include 'fixed/headerfaltu.php';?>
<br>
<br>
<div class="content-push">



	<div class="information-blocks">
		<!-- <a href="<?php echo base_url();?>" class="button style-3">Document</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="<?php echo base_url();?>index.php/main/search_home" class="button style-4">Video & Animation</a> -->

		<div class="row">
			<div class="col-md-12 information-entry">
				<center><h5 style="font-size: 5em;">KIET Code Platform</h5></center>
			</div>
			<div class="col-md-6 information-entry" style="float: right;font-size: 1.5em;">
				<p>E-learning(A Step Towards Change)</p>
			</div>

		</div>
		<?php echo form_open_multipart('code/index'); ?>
		<br>
		<br>
<br>
		<div class="col-md-12 information-entry" style="margin: 1em;">
			<input class="simple-field" type="text" placeholder="Enter Email" value="" name="email" required/>


		</div>
		<div class="col-md-12 information-entry" style="margin: 1em;">
			<input class="simple-field" type="password" placeholder="Enter password" value="" name="password" required/>


		</div>
<?php if(isset($err))
{?>
		<p><center style="color:red;">*<?php

			echo $err;

		?> </center></p>
	<?php }?>
		<br>
		<br>
		<div class="class=col-md-12 information-entry" style="margin-bottom:2em; ">
			<center>
				<button type="submit" class="button style-3" name="login" value="1">Login</button>

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
