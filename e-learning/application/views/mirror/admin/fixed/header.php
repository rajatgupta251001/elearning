<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="<?php echo base_url();?>assets/theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/theme/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/theme/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>assets/theme/css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <title>E-learning || Code Mirror</title>
    </head>
    <body class="style-12">

        <!-- LOADER -->
        <div id="loader-wrapper">
            <div class="bubbles">
                <div class="title">loading</div>
                <span></span>
                <span id="bubble2"></span>
                <span id="bubble3"></span>
            </div>
        </div>

        <div id="content-block">

            <div class="content-center fixed-header-margin">
                <!-- HEADER -->
                <div class="header-wrapper style-12">
                    <header class="type-4">
                        <div class="header-top">
                            <div class="header-top-entry">
                            <a href="<?php echo base_url();?>">
															  <div class="title"><img src="<?php echo base_url();?>assets/logo.png" alt="" style="height: 3em;width:14em;" /></div></a>


                            </div>
                            <div class="header-top-entry">

                            </div>
                            <div class="header-top-entry hidden-xs">
                            </div>

                            <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                            <div class="clear"></div>
                        </div>



                        <div class="header-middle">
                            <div class="right-entries">
                             <?php
                             $pdata = $this->session->userdata('logged_in');
 ?>
 <a class="header-functionality-entry" href="<?php echo base_url();?>">Leaders Board</a>

 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/code/admin_truncate">Empty tables</a>

 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/code/admin_question">Question</a>

 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/code/admin_user">User</a>
 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/code/admin_report">Report</a>
                                <a class="header-functionality-entry open-cart-popup" href="#"><i class="fa fa-user"></i><span>Welcome:<?php                                     echo $pdata['username'];
                                    ?></span></a>
                                </div>

                            </div>






                        </header>
                        <div class="clear"></div>
                    </div>






                    <div class="cart-box popup">
                        <div class="popup-container">


                            <div class="cart-buttons">

                                <div class="column">

                                    <a class="button style-4" href="<?php echo base_url();?>index.php/code/logout">Logout</a>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
