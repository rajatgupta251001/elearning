<!DOCTYPE html>
<html lang="en">
  
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98599361-1', 'auto');
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-learning</title>

   
	<script src="<?php echo base_url();?>assets/login/js/pace.js"></script>
    <link href="<?php echo base_url();?>assets/login/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/login/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/login/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/login/css/animate.css" rel="stylesheet">
	<link href='<?php echo base_url();?>assets/login/http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url();?>assets/login/css/theme-loading-bar.css" rel="stylesheet" />
  </head>
  <body>
	<div class="container" id="container" style="display:none;">
		<header>
			<!-- Main comapny header -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand top-navbar-brand" href="#">E-learning</a>
				</div>
				<ul class="nav navbar-nav navbar-right bigger-130 hidden-xs">
					<li><a href="https://www.youtube.com/channel/UCU1uIOMUiu_yKI_RMD_m0QA"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.facebook.com/kiet.elearning"><i class="fa fa-facebook"></i></a></li>
					
				</ul>
			  </div>
			</nav>
		</header>
		<section id="form">
			<div class="container">    
				<div id="registertext" class="mainbox col-xs-12 col-sm-6">  
					<div class="jumbotron black-alpha-90 animated fadeInLeft">
						<h2>Be a member of E-learning</h2>
						
						<ul>


						<!-- write advantage -->

							<li><b>24 hours a day and 7 days a week</li>
							<li>Learn from anywhere</li>
							<li>Reduce your travel cost</li>
								<li>Learn at your own place
							</b></li>
							
							<!-- // write advantage  -->

						</ul>
					</div>
				</div>
				<div id="loginbox" class="mainbox col-xs-12 col-sm-6 animated zoomInDown">                    
					<div class="panel white-alpha-90" >
						<div class="panel-heading">
							<div class="panel-title text-center"><h2><span class="text-primary">Forget Password</span></h2></div>
						</div>     
						<div class="panel-body" >
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


								<form id="loginform" class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/main/send" method="POST">

								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter your college email id without suffix @kiet.edu" required>
								</div>
													
							
								<div class="input-group col-xs-12 text-center login-action">
								  <div class="checkbox">
									<label>
									  Enter your college email id without suffix @kiet.edu
									  <!-- <span id="btn-login"><a href="" class="btn btn-success">Register  </a></span> -->
									  <span id="btn-login">
<button name="submit" type="submit" class="btn btn-success">Forget Password</button>

</span>
									</label>
								  </div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
									  
									</div>
								</div>
							</form>   


						</div>                     
					</div>  
				</div>
			</div>
		</section>
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			  <div class="container text-center">
				<div class="footer-content">
				  Already registered? <a href="<?php echo base_url();?>" class="btn btn-primary"> Sign In </a>
				</div>
			  </div>
			</nav>
		</footer>
	</div>

	<script src="<?php echo base_url();?>assets/login/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/login/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/login/js/jquery.backstretch.min.js"></script>
	<script>
		Pace.on('hide', function(){
		  $("#container").fadeIn('1000');
		  $.backstretch([
				"<?php echo base_url();?>assets/login/images/e-learning1.jpg",
				"<?php echo base_url();?>assets/login/images/e-learning2.jpg",
				"<?php echo base_url();?>assets/login/images/e-learning3.jpg",
				"<?php echo base_url();?>assets/login/images/e-learning4.jpg",
				"<?php echo base_url();?>assets/login/images/e-learning5.jpg",
				"<?php echo base_url();?>assets/login/images/e-learning6.jpg",
				
			
			], {duration: 5000, fade: 1000});
		});		
	</script>
  </body>
</html>