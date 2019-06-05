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
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>assets/theme/css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <title>E-learning</title>
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

                             if($pdata['rank']=='admin')
                             {
                                ?>
                         <!--  -->
                                 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/maindocument/upload/BTECH/BIO_TECH/I/WEB"><i class="fa fa-upload"></i><span>Upload Document</span></a>

																 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/main/upload/BTECH/BIO_TECH/I/WEB"><i class="fa fa-cloud-upload"></i><span>Upload Video & Animation</span></a>
																 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/main/report_d"><i class="fa fa-bar-chart"></i><span>Report doc</span></a>
																 <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/main/report_v"><i class="fa fa-bar-chart"></i><span>Report Video & Animation</span></a>

                                <?php } ?>
                                <a class="header-functionality-entry open-cart-popup" href="#"><i class="fa fa-user"></i><span>Welcome:<?php                                     echo $pdata['username'];
                                    ?></span></a>
                                </div>

                            </div>





                            <div class="close-header-layer"></div>
                            <div class="navigation">
                                <div class="navigation-header responsive-menu-toggle-class">
                                    <div class="title">Main Menu</div>
                                    <div class="close-menu"></div>
                                </div>
                                <div class="header-simple-search hidden-xs hidden-sm hidden-md">

                                </div>

                                <div class="nav-overflow">
                                    <nav>


                                        <ul>
                                            <li><a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a></li>
                                            <li class="simple-list">
                                                <a>Video & Animation</a><i class="fa fa-chevron-down"></i>
                                                <div class="submenu">
                                                    <ul class="simple-menu-list-column">
                                                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/video"><i class="fa fa-angle-right"></i>Video</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/anmi"><i class="fa fa-angle-right"></i>Animation</a></li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="simple-list">
                                                <a>Search</a><i class="fa fa-chevron-down"></i>
                                                <div class="submenu">
                                                    <ul class="simple-menu-list-column">
                                                        <li><a href="<?php echo base_url();?>"><i class="fa fa-angle-right"></i>Document</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/main/search_home"><i class="fa fa-angle-right"></i>Video & Animation</a></li>


                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="simple-list">
                                                <a href="<?php echo base_url().'index.php/code';?>">Code Mirror</a>
                                              <!--  <div class="submenu">
                                                    <ul class="simple-menu-list-column">
                                                        <li><a href="<?php echo base_url(); ?>index.php/main/commingsoon"><i class="fa fa-angle-right"></i>Learn</a></li>
                                                        <li><a href="<?php echo base_url(); ?>index.php/main/lab"><i class="fa fa-angle-right"></i>Labs</a></li>
                                                        <li><a href="<?php echo base_url();?>index.php/main/compiler"><i class="fa fa-angle-right"></i>Compiler</a></li>
                                                        <li><a href="<?php echo base_url(); ?>index.php/main/commingsoon"><i class="fa fa-angle-right"></i>Competitive Coding</a></li>
                                                        <li><a href="<?php echo base_url(); ?>index.php/main/contest"><i class="fa fa-angle-right"></i>Contest</a></li>

                                                    </ul>
                                                </div>-->
                                            </li>

                                        </ul>



                                        <div class="clear"></div>

                                        <a class="fixed-header-visible additional-header-logo"><img src="<?php echo base_url();?>assets/logo.png" alt="" /></a>
                                    </nav>
                                    <div class="navigation-footer responsive-menu-toggle-class" style="margin-top: 1em;">

                                        <a class="header-functionality-entry" href="<?php echo base_url();?>index.php/main/changepass" style="color: white;"><i class="fa fa-key" style="color: white;"></i>Change password</a><br>
                                        <a class="header-functionality-entry" href="<?php base_url();?>logout" style="color: white;"><i class="fa fa-user" style="color: white;"></i>Log Out</a>

                                        <div class="socials-box">

                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="navigation-copyright">Created by <a href="#">Team E-learning</a>. All rights reserved</div>
                                    </div>
                                </div>

                            </div>
                        </header>
                        <div class="clear"></div>
                    </div>






                    <div class="cart-box popup">
                        <div class="popup-container">


                            <div class="cart-buttons">
                                <div class="column">
                                    <a class="button style-3" href="<?php echo base_url();?>index.php/main/changepass">Change Password</a>
                                    <div class="clear"></div>
                                </div>
                                <div class="column">
                                    <a class="button style-4" href="<?php base_url();?>logout">Logout</a>
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
