<?php include 'fixed/headerfaltu.php';?>
<div class="content-push">

	<div class="row">
		<div class="col-md-12 information-entry">
			<center><h5 style="font-size: 4em;">Your password has been changed</h5></center>
		</div>
		<div class="col-md-12 information-entry" style="float: right;font-size: 1.5em;">
			<center>
				<p>Please logout</p>
				<p>This page will automatically logout from all browser after</p>
				<p id="countDown"></p>
				<p>sec</p>

				<a href="<?php echo base_url();?>index.php/main/logout" class="btn btn-lg btn-info">Log Out</a></center><hr>

			</div>

		</div>


		<!-- Button -->
	</div>
</div>



</div>
</div>




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

		<script type="text/javascript">
			var count = 5;
setInterval(function(){
    count--;
    document.getElementById('countDown').innerHTML = count;
    if (count <= 0) {
        window.location = '<?php echo base_url();?>index.php/code/logout';
    }
},1000);
		</script>
