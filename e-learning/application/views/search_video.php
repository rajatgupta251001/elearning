		<?php include 'fixed/header.php';?>
		<div class="content-push">
			<div class="information-blocks">
				<a href="<?php echo base_url();?>" class="button style-3">Document</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="<?php echo base_url();?>index.php/main/search_home" class="button style-4">Video & Animation</a>
				
				<div class="row">
					<div class="col-md-6 information-entry">
						<h5 style="font-size: 2em;">E-Learning</h5>
						
						<p style="font-size: 1em;">Video & Animation</p>

					</div>
				</div>
				<?=form_open_multipart('index.php/main/search_video')?>
				<div class="class=col-md-12 information-entry" style="margin: 2em;">
					<input class="simple-field" type="text" placeholder="Enter Query" vaplaceholder="<?php echo $searchuser;?>" value="<?php echo $searchuser;?>" name="search" required/>
					<button class="button style-3" type="submit">Video & Animation Search</button>
					<ul id="myList" style="list-style:none;">
						<?php

						foreach ($search as $k=>$kk) {


							foreach ($active as $kkk) {
		# code...

								if($kkk->sno == $k && $kk>=1)
								{

									foreach ($images as $ke) {
		# code...
										if($ke->id == $kkk->sno)
										{
											$uploadname=$ke->uploadname;
											$date=$ke->date;
											$views=$ke->views;
										}
									}
									?>

									<li>
										<i class="fa fa-pencil"></i>
										<a href="<?php echo base_url();?>index.php/main/single/<?php echo $kkk->sno;?>" style="color: #ca1515;font-size: 2em;font-family: 'Francois One', sans-serif;"><b>[<?php echo $kkk->videotype;?>]</b><?php echo $kkk->title;?><b>(<?php echo $uploadname;?>)</b></a>
										<p style="font-size: 1.3em;font-family: 'Indie Flower', cursive;word-wrap: break-word;"><br><?php echo $kkk->subtitle;?><b>(<?php echo $kkk->course;?>/<?php echo $kkk->branch;?>/<?php echo $kkk->semester;?>/<?php echo $kkk->subject;?>)</b>
											<br>
											<b>Date:</b><?php echo $date;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Views:</b><?php echo $views;?></p>
										</li>
										<hr>
										<?php
									}

								}




							}


							?>


						</ul>

					</form>

				</div>
				<div class="class=col-md-12 information-entry" style="margin-bottom:2em; ">
					<center>
						<div id="loadMore"><button  class="btn btn-default btn-lg col-md-4" style="background-color: #6f5489;margin-left: 30%;"><span style="color:#fff;">Load More</span></button></div>


					</center>  

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

<script type="text/javascript">
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=2;
		$('#myList li:lt('+x+')').show(1000);
		$('#loadMore').click(function () {
			x= (x+5 <= size_li) ? x+5 : size_li;
			$('#myList li:lt('+x+')').show(1000);
		});

	});

</script>
</body>
</html>
