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

    <body class="home page page-id-5 page-template-default hero-enable header-boxed header-margin-true header-trans-false header-is-closing-true desktop wpb-js-composer js-comp-ver-4.7 vc_responsive">
        
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

        <div class="page-hero cover">
            <div class="hero-content">
                <div class="inner">
                    <h2><span style="color: #ffffff;">Mathematicians stand on each others’ shoulders and computer scientists stand on each others’ toes.

— Richard Hamming</span></h2>
                </div>
            </div>
            <div id="video-bg" style="background-image: url('<?php echo base_url(); ?>assets/codemirror/images/tumblr_nqx8ovsnHL1tubinno1_1280.jpg');">
                <video autoplay loop poster="<?php echo base_url(); ?>assets/codemirror/images/tumblr_nqx8ovsnHL1tubinno1_1280.jpg">
                    <source type="video/mp4" src="<?php echo base_url(); ?>assets/codemirror/images/1920x1080_desk-side_x264.mp4" media="(orientation:landscape)">
                    <source type="video/webm" src="<?php echo base_url(); ?>assets/codemirror/images/1920x1080_desk-side_VP8.webm" media="(orientation:landscape)">
                </video>
            </div>
            <div id="skip">
                <a href="#content"><i class="fa fa-3x fa-angle-down pulsing"></i></a>
            </div>
        </div><!-- /.page-hero -->













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
                                                    <div class="vc_empty_space" style="height: 150px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                                    <div class="heading-area heading-607292 left">
                                                           <h1>Learn,Contest,Compile</h1>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.boxed-row -->
                                    
                                    
                                    <div class="row normal_height vc_row wpb_row vc_row-fluid vc_custom_1437768633035">
                                        <div class="vc_col-sm-12 column">
                                            <div class="wpb_wrapper">
                                                <div class="portfolio-container three-cols">
                                                 <div class="tile post-213 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-packaging portfolio_tag-beauty" data-terms="art-direction brand-development packaging">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-3">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/bb.png" width="960" height="540" class="visibility-hidden" alt="img-864" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Learn</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">Coders And Non Coders are invited here to learn</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="tile post-632 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-fashion" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url(); ?>index.php/main/contest" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-1">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/aa.png" width="960" height="540" class="visibility-hidden" alt="img-865" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Contest</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">All coders under one roof</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                    <div class="tile post-616 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-retail" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url();?>index.php/main/compiler" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-2">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/compiler.png" width="960" height="540" class="visibility-hidden" alt="img-950" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Compiler</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">Compile Your code here</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                   <!-- /.portfolio -->
                                                </div>


<div class="vc_empty_space" style="height: 10px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>



                                                <div class="portfolio-container three-cols">
                                                    <div class="tile post-632 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-fashion" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-1">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/image1.jpg" width="960" height="540" class="visibility-hidden" alt="img-865" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Labs</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">Now code here for lab Program</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                    <div class="tile post-616 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-retail" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-2">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/image2.jpg" width="960" height="540" class="visibility-hidden" alt="img-950" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Competitive Coding</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">Practise here for the competive contest like codejam,codevita</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                    <div class="tile post-213 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-packaging portfolio_tag-beauty" data-terms="art-direction brand-development packaging">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-3">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/comming.png" width="960" height="540" class="visibility-hidden" alt="img-864" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Comming Soon</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">  </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                </div>

<div class="vc_empty_space" style="height: 10px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>



                                                <div class="portfolio-container three-cols">
                                                    <div class="tile post-632 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-fashion" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-1">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/comming.png" width="960" height="540" class="visibility-hidden" alt="img-865" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Comming Soon</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">   </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                    <div class="tile post-616 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-interactive-design portfolio_tag-retail" data-terms="art-direction brand-development interactive-design">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-2">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/comming.png" width="960" height="540" class="visibility-hidden" alt="img-950" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Comming Soon</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">  </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                    <div class="tile post-213 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-art-direction portfolio_category-brand-development portfolio_category-packaging portfolio_tag-beauty" data-terms="art-direction brand-development packaging">
                                                        <a href="<?php echo base_url(); ?>index.php/main/commingsoon" class="do-lazy-load-on-shown">
                                                            <span class="image-placeholder area-3">
                                                                <img data-src="<?php echo base_url(); ?>assets/codemirror/images/comming.png" width="960" height="540" class="visibility-hidden" alt="img-864" />
                                                            </span>
                                                            <div class="unveil">
                                                                <div class="wrapper">
                                                                    <h4 class="h2 title">Comming Soon</h4>
                                                                    <hr class="dash">
                                                                    <div class="meta">
                                                                        <p class="desc">  </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div><!-- /.portfolio -->
                                                </div>


<div class="vc_empty_space" style="height: 50px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                            </div><!-- /.wpb_wrapper -->
                                        </div>
                                    </div><!-- /.row -->
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
                                                           <a href="<?php echo base_url(); ?>index.php/main/contest">Contest</a>
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