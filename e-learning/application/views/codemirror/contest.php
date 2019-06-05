<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>E-learning | Code Mirror</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">
        <!-- js Composer CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/js_composer.css" rel="stylesheet">
        <!-- Fresco CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/fresco.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/font-awesome.min.css" rel="stylesheet">
        <!-- Style CSS -->
        <link href="<?php echo base_url(); ?>assets/codemirror/css/style.css" rel="stylesheet">
        <!-- Jquery Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery.js"></script>
        <!-- Jquery Migrate Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jquery-migrate.min.js"></script>
        <!-- Jwplayer Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/jwplayer.js"></script>
        <!-- Modernizr Js -->
        <script src="<?php echo base_url(); ?>assets/codemirror/js/modernizr-2.8.3.min.js"></script>
           </head>

    <body class="home page page-id-5 page-template-default header-boxed header-margin-true header-trans-false header-is-closing-true desktop wpb-js-composer js-comp-ver-4.7 vc_responsive">
        
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <div class="site-branding">
                    <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <ul id="menu-primary-navigation" class="menu">
                         <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/codemirror">Code Mirror Home</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>">Main Home</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                            <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                        </li>
                        <li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662">
                            <a href="<?php echo base_url();?>index.php/main/dashcourse/video">video & Animation</a>
                        </li>
                        <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>index.php/main/changepass">Welcome: <?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/changepass">Edit/password</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/logout">logout</a>
                                </li>
                            </ul>
                        </li>


                    </ul> <span class="trigger taphover"><i class="fa fa-angle-left"></i></span>
                </nav><!-- /#site-navigation -->
            </div>
        </header><!-- /#masthead -->

        <div class="trigger-mobile-nav">
            <i class="fa fa-angle-left"></i>
            <div class="site-branding">
                    <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a>
                </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul id="menu-primary-navigation-1" class="menu">
                         <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/codemirror">Code Mirror Home</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>">Main Home</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li id="menu-item-663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-663">
                            <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                        </li>
                        <li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662">
                            <a href="<?php echo base_url();?>index.php/main/dashcourse/video">video & Animation</a>
                        </li>
                        <li id="menu-item-665" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-665"><a href="<?php echo base_url();?>index.php/main/changepass">Welcome: <?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></a>
                            <ul class="sub-menu">
                                <li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/changepass">Edit/password</a>
                                </li><li id="menu-item-773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"><a href="<?php echo base_url();?>index.php/main/logout">logout</a>
                                </li>
                            </ul>
                        </li>


                </ul>
            </nav>
        </div><!-- /.trigger-mobile-nav -->

        <div id="page" class="site">
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <div class="page-container">
                            <article id="post-5" class="post-5 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="boxed-row">
                                        <div style="" class="row normal_height vc_row wpb_row vc_row-fluid">
                                            <div class="vc_col-sm-12 column">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_empty_space" style="height: 30px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                                    <div class="heading-area heading-607292 left">
                                                           <h1>Contest</h1>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.boxed-row -->
                                    
                                    
                                    <div class="row normal_height vc_row wpb_row vc_row-fluid vc_custom_1437768633035">
                                        <div class="vc_col-sm-12 column">
                                            <div class="wpb_wrapper">
 
<article>
<div class="vc_col-sm-4">
<h2>Overall Rank</h2>
<div style="overflow-y: scroll;height: 400px;"><table>
<tr style="background-color: grey;">
    <th style="color: white;"><b>Rank</b></th>
    <th style="color: white;"><b>Name</b></th>
    <th style="color: white;"><b>Score</b></th>
</tr>
<?php 
$a=1;
foreach($rank as $ran)
{  ?>
    <tr>
    <th><?php echo $a; $a++?></th>
        <th><?php  echo $ran['name'];?></th>
        <th><?php echo $ran['score'];?></th>
    </tr>
    <?php }?>
</table>
</div>
</div>

<div class="vc_col-sm-8" >

<h2>Problems</h2>
<div style="overflow-y: scroll;height: 400px;">


<table>
<tr style="background-color: grey;">
    <th style="color: white;width: 10%;"><b>Sno</b></th>
    <th style="color: white;"><b>Problem</b></th>
    <th style="color: white;width: 10%"><b>Submission</b></th>
    <th style="color: white;width: 15%;"><b>Status</b></th>

</tr>
<?php 
foreach($contest as $ran)
{  

$user = explode("*",$ran['user']);?>
    <tr>
    <th><?php echo $ran['sno'];?><?php
if (in_array($pdata['username'], $user)){
     ?>
         <i class="fa fa-check" aria-hidden="true"></i>
<?php } ?>
     </th>
        <th><?php  echo $ran['question'];?></th>
        <th><?php echo $ran['successful'];?>/<?php echo $ran['submittion'];?></th>
        <th>
<?php
if (in_array($pdata['username'], $user)) {
     ?>
        <a style="color: #fff;
    background-color: #b69853;
    font-size: 0.875rem;
    font-weight: 700;
    border: none;
    border-radius: 0;
    text-align: center;
    text-transform: uppercase;
    text-shadow: none;
    box-shadow: none;
    padding: .5rem .5rem .5rem;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;" href="contestquestion/<?php echo $ran['sno'];?>">Try Again</a>
    <?php }else{?>

        <a style="color: #fff;
    background-color: #b69853;
    font-size: 0.875rem;
    font-weight: 700;
    border: none;
    border-radius: 0;
    text-align: center;
    text-transform: uppercase;
    text-shadow: none;
    box-shadow: none;
    padding: .5rem .5rem .5rem;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;" href="contestquestion/<?php echo $ran['sno'];?>">Solve</a>

    <?php }?>
</th>
    </tr>
    <?php }?>
</table>

</div>
</div>
  </article>







                                            </div><!-- /.wpb_wrapper -->
                                        </div>
                                    </div><!-- /.row -->
                                    <br>
                                </div><!-- // entry-content -->
                            </article><!-- // post -->
                        </div><!-- // page-container -->
                    </main><!-- // main -->
                </div><!-- // primary -->
            </div><!-- // content -->
        </div><!-- // page -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info">
                <div class="grid">
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                <p>     <a href="<?php echo base_url(); ?>"  style="width:200px;"><img src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a></p>

                                <p>Moving the kietians to the new area of technology,where they can learn,explore there skills online.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h6 class="widget-title">Social</h6>
                            <div class="menu-social-networks-container">
                                <ul id="menu-social-networks" class="menu">
                                    <li id="menu-item-638" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-638"><a target="_blank" href="https://www.facebook.com/kiet.elearning">Facebook</a>
                                    </li>
                                    <li id="menu-item-639" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-639"><a target="_blank" href="https://www.youtube.com/channel/UC4rxBQyVV00oGX9-m2aqKYw">Youtube</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3 mobile-col-1-3">
                        <div id="text-3" class="widget widget_text">
                            <h6 class="widget-title">Tags</h6>
                            <div class="tagcloud">

                            
                                                           <a href="<?php echo base_url();?>index.php/maindocument/dashcourse">Document</a>
                                                           <a href="<?php echo base_url();?>index.php/main/dashcourse">Video & Animation</a>
                                                           <a href="http://lms.kiet.edu">Moodle</a>
                                                           <a href="http://nptel.kiet.edu">Nptel</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/commingsoon">Learn Languages</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/Compiler">Compiler</a>
                                                           <a href="<?php echo base_url(); ?>index.php/main/commingsoon">Contest</a>
                                                       </div>

                        </div>
                    </div>
                </div>
            </div><!-- // site-info -->
            
        </footer><!-- // footer -->



        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.form.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/picturefill.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jwplayer.custom.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.easing.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/pace.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/scrollMonitor.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.perfectscrollbar.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.hoverintent.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.smoothscroll.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.imageloaded.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.fitvids.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/retina.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/touch.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/fresco.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/app.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/codemirror/js/jquery.scrollto.min.js'></script>
    </body>
</html>