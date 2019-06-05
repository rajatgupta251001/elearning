<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <title>E-learning</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

       
       
        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/font-awesome.min.css">  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/perfect-scrollbar-0.4.5.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/style.css">
        <link id="theme-style" rel="stylesheet" href="<?php echo base_url();?>assets/profile/css/styles/default.css">

        
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/TweenMax.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery.carouFredSel-6.2.1-packed.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery.dropdownit.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/ScrollToPlugin.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/masonry.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/magnific-popup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/profile/js/custom.js"></script>

        <link rel="stylesheet" href="<?php echo base_url();?>assets/profile/custom-style.css">



    </head>
    <body>

        <div id="wrapper">
            <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
                            <div class="portrate hidden-xs"></div>
                            <div class="title">
                                <h2><?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></h2>
                                <h3><?php echo $pdata['rank'];?></h3>

                                <!-- <?php foreach ($admin_bio as $key) {
                                  ?>
                                   <h3><?php echo $key->bio;?></h3>
                                 <?php
                                }
                                ?> -->

                            </div>
                            
                        </div>
                        <ul id="navigation">
                        <li>
                              <a href="#home" >
                                <div class="icon icon-home"></div>
                                <div class="text">Home</div>
                              </a>
                            </li>  

<?php if( $pdata['rank']=="admin")
{?>
                            <li>
                              <a href="#biography">
                                <div class="icon icon-user"></div>
                                <div class="text">About Me</div>
                              </a>
                            </li>  
                            <?php }?>
                            <li>
                              <a href="#research">
                                <div class="icon icon-book"></div>
                                <div class="text">Research</div>
                              </a>
                            </li> 
                            
                            <li>
                              <a href="#publications">
                                <div class="icon icon-edit"></div>
                                <div class="text">Publications</div>
                              </a>
                            </li> 

                            <li>
                              <a href="#teaching">
                                <div class="icon icon-time"></div>
                                <div class="text">Teaching</div>
                              </a>
                            </li>

                              <li>
                              <a href="#contact">
                                  <div class="icon icon-calendar"></div>
                                  <div class="text">Contact & Meet Me</div>
                              </a>
                            </li>
                             <li>
                              <a href="#back">
                                  <div class="icon icon-arrow-left"></div>
                                  <div class="text">Back</div>
                              </a>
                            </li>
                                <li>
                              <a href="#logout">
                                  <div class="icon icon-user"></div>
                                  <div class="text">Log Out</div>
                              </a>
                            </li>
                            
                        </ul>
                    </div>        
                </div>
                
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>    
            </div>

            <div id="main">
            

                

                <div id="home" class="page home" data-pos="home">
 <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">
                                    <div class="col-sm-2 visible-sm"></div>
                                    <div class="col-sm-8 col-md-5">
                                        <div class="biothumb">
                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/personal/06.jpg"  class="img-responsive">
                                            <div class="overlay">
                                                
                                                <h1 class="">Jennifer Doe</h1>
                                                <ul class="list-unstyled">
                                                    <li>Graduate School of Business</li>
                                                    <li>Knight Management Center</li>
                                                    <li>Stanford University</li>
                                                </ul>
                                            </div> 
                                            
                                               
                                        </div>
                                        
                                    </div>
                                    <div class="clearfix visible-sm visible-xs"></div>
                                    <div class="col-sm-12 col-md-7">
                                        <h3 class="title">Bio</h3>
                                        <p>A social psychologist and marketer, Jennifer Doe is the General Atlantic Professor of Marketing and Ormond Family Faculty at Stanford University’s Graduate School of Business. Her research spans time, money and happiness. She focuses on questions such as: What actually makes people happy, as opposed to what they think makes them happy? </p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>  
                                    
                                </div>
                            </div>        
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Academic Positions</h3>
                                        </div>
                                        <ul class="ul-dates">
                                            <li>
                                                <div class="dates">
                                                    <span>Present</span>
                                                    <span>2005</span>
                                                </div>
                                                <div class="content">
                                                    <h4>General Atlantic Professor</h4>
                                                    <p><em>Stanford University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2005</span>
                                                    <span>2004</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Full Professor</h4>
                                                    <p><em>Stanford University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2004</span>
                                                    <span>2001</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Assistant Professor</h4>
                                                    <p><em>UCLA</em>, Anderson Graduate School of Management</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2001</span>
                                                    <span>1999</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Visiting Assistant Professor</h4>
                                                    <p><em>Columbia University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="title text-center">
                                            <h3>Education & Training</h3>
                                        </div>
                                        <ul class="ul-card">
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">Ph.D.</span>
                                                    <span class="year">1995</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Ph.D. in Marketing</p>
                                                    <p class="where">Stanford University Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">M.B.A.</span><span class="year">1993</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Master of Business Administration</p>
                                                    <p class="where">Boston University</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">B.A.</span><span class="year">1989</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Bachelor of Arts in Psychology</p>
                                                    <p class="where">University of California, Berkeley</p>
                                                </div>
                                            </li>
                                            
                                        </ul>

                                    </div>    
                                </div>    
                            </div>
                                
                        </div>

                        <div class="section color-2">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Honors, Awards and Grants</h3>
                                        </div>
                                        <ul class="timeline">
                                                    
                                            <li class="open">
                                                <div class="date">SCP 2014</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Distinguished Scientific Achievement Award</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2012-2013</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Ormond Family Faculty Fellow</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">June 2011</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Nautilus Silver Award for Dragonfly Effect</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2000 - 2003</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Hong Kong Science International Research Grant</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">1999</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Citibank Best Teacher Award (school-wide award, UCLA)</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>

                <div id="biography" class="page">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">
                                    <div class="col-sm-2 visible-sm"></div>
                                    <div class="col-sm-8 col-md-5">
                                        <div class="biothumb">
                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/personal/06.jpg"  class="img-responsive">
                                            <div class="overlay">
                                                
                                                <h1 class="">Jennifer Doe</h1>
                                                <ul class="list-unstyled">
                                                    <li>Graduate School of Business</li>
                                                    <li>Knight Management Center</li>
                                                    <li>Stanford University</li>
                                                </ul>
                                            </div> 
                                            
                                               
                                        </div>
                                        
                                    </div>
                                    <div class="clearfix visible-sm visible-xs"></div>
                                    <div class="col-sm-12 col-md-7">
                                        <h3 class="title">Bio</h3>
                                        <p>A social psychologist and marketer, Jennifer Doe is the General Atlantic Professor of Marketing and Ormond Family Faculty at Stanford University’s Graduate School of Business. Her research spans time, money and happiness. She focuses on questions such as: What actually makes people happy, as opposed to what they think makes them happy? </p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor.sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>  
                                    
                                </div>
                            </div>        
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-5 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Academic Positions</h3>
                                        </div>
                                        <ul class="ul-dates">
                                            <li>
                                                <div class="dates">
                                                    <span>Present</span>
                                                    <span>2005</span>
                                                </div>
                                                <div class="content">
                                                    <h4>General Atlantic Professor</h4>
                                                    <p><em>Stanford University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2005</span>
                                                    <span>2004</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Full Professor</h4>
                                                    <p><em>Stanford University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2004</span>
                                                    <span>2001</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Assistant Professor</h4>
                                                    <p><em>UCLA</em>, Anderson Graduate School of Management</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dates">
                                                    <span>2001</span>
                                                    <span>1999</span>
                                                </div>
                                                <div class="content">
                                                    <h4>Visiting Assistant Professor</h4>
                                                    <p><em>Columbia University</em>, Graduate School of Business</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="title text-center">
                                            <h3>Education & Training</h3>
                                        </div>
                                        <ul class="ul-card">
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">Ph.D.</span>
                                                    <span class="year">1995</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Ph.D. in Marketing</p>
                                                    <p class="where">Stanford University Graduate School of Business</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">M.B.A.</span><span class="year">1993</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Master of Business Administration</p>
                                                    <p class="where">Boston University</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dy">
                                                    <span class="degree">B.A.</span><span class="year">1989</span>
                                                </div>
                                                <div class="description">
                                                    <p class="waht">Bachelor of Arts in Psychology</p>
                                                    <p class="where">University of California, Berkeley</p>
                                                </div>
                                            </li>
                                            
                                        </ul>

                                    </div>    
                                </div>    
                            </div>
                                
                        </div>

                        <div class="section color-2">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="title text-center">
                                            <h3>Honors, Awards and Grants</h3>
                                        </div>
                                        <ul class="timeline">
                                                    
                                            <li class="open">
                                                <div class="date">SCP 2014</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Distinguished Scientific Achievement Award</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2012-2013</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Ormond Family Faculty Fellow</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">June 2011</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Nautilus Silver Award for Dragonfly Effect</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">2000 - 2003</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Hong Kong Science International Research Grant</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="date">1999</div>
                                                <div class="circle"></div>
                                                <div class="data">
                                                    <div class="subject">Citibank Best Teacher Award (school-wide award, UCLA)</div>
                                                    <div class="text row">
                                                        <div class="col-md-2">
                                                            <img alt="image" class="thumbnail img-responsive" src="<?php echo base_url();?>assets/profile/img/Nobel_Prize.png" >
                                                        </div>
                                                        <div class="col-md-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dapibus lectus non dignissim. Pellentesque auctor ornare urna, volutpat condimentum quam porttitor at. Vestibulum tincidunt diam in eros aliquam luctus. Donec sagittis a purus a porttitor. Sed non feugiat enim. Donec eget metus erat. Vivamus sed consequat orci. Aenean commodo lectus sed purus auctor ullamcorper.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>

                <div id="research" class="page">
                    <div class="pageheader">

                        <div class="headercontent">

                            <div class="section-container">
                                <h2 class="title">Research Summary</h2>
                            
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>Recent trends in deep-submicron very large-scale integration (VLSI) circuit technology have resulted in new requirements for algorithms in integrated circuit layout. Much of my work centers on new formulations that capture performance and density criteria in the physical layout phases of computer-aided design (CAD). Our results include near-optimal approximation algorithms for such computationally difficult problems as minimum-cost Steiner tree routing, low-skew clock networks, cost-radius tradeoffs, bounded-density trees, circuit probe testing, high-performing Elmore-based constructions, layout density control, and improved manufacturability. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="subtitle text-center">
                                            <h3>Interests</h3>
                                        </div>
                                        <ul class="ul-boxed list-unstyled">
                                            <li>Time, Money and Happiness</li>
                                            <li>The Power of Story</li>
                                            <li>Building Innovative Brands</li>
                                            <li>Cultural Psychology</li>
                                            <li>Emotions, Goals, and Health</li>
                                            <li>computer-aided design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="title text-center">
                                    <h3>Laboratory Personel</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        
                                        <div id="labp-heads-wrap">
                                            
                                            <div id="lab-carousel">
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab5.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab2.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab1.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab4.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab3.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                                <div><img alt="image" src="<?php echo base_url();?>assets/profile/img/lab/lab6.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                            </div>
                                            <div>
                                                <a href="#" id="prev"><i class="icon-chevron-sign-left"></i></a>
                                                <a href="#" id="next"><i class="icon-chevron-sign-right"></i></a>
                                            </div>
                                        </div>

                                        <div id="lab-details">
                                            <div>
                                                <h3>David A. Doe</h3>
                                                <h4>Postdoctoral fellow</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                            <div>
                                                <h3>James Doe</h3>
                                                <h4>Postdoctoral fellow</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                            <div>
                                                <h3>Nadja Sriram</h3>
                                                <h4>Postdoctoral fellow</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                            <div>
                                                <h3>Davide Doe</h3>
                                                <h4>Research Assistant</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                            <div>
                                                <h3>Pauline Doe</h3>
                                                <h4>Summer Intern</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                            <div>
                                                <h3>James Doe</h3>
                                                <h4>Postdoctoral fellow</h4>
                                                <a href="#" class="btn btn-info">+ Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Great lab Personel!</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section color-2">
                            <div class="section-container">
                                <div class="title text-center">
                                    <h3>Research Projects</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="ul-withdetails">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p3.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p2.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p4.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p5.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p3.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="image">
                                                            <img alt="image" src="<?php echo base_url();?>assets/profile/img/projects/p2.jpg"  class="img-responsive">
                                                            <div class="imageoverlay">
                                                                <i class="icon icon-search"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-9">
                                                        <div class="meta">
                                                            <h3>Title of Preject</h3>
                                                            <p>Very short description of the project.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>

                <div id="publications" class="page">
                    <div class="page-container">
                        <div class="pageheader">
                            <div class="headercontent">
                                <div class="section-container">
                                    
                                    <h2 class="title">Selected Publications</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="pagecontents">
                            
                            <div class="section color-1" id="filters">
                                <div class="section-container">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <h3>Filter by type:</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                                                <option class="filter" value="all" selected>All types</option>
                                                <option class="filter" value="jpaper">Jounal Papers</option>
                                                <option class="filter" value="cpaper">Conference Papers</option>
                                                <option class="filter" value="bookchapter">Book Chapters</option>
                                                <option class="filter" value="book">Books</option>
                                                <!-- <option class="filter" value="report">Reports</option>
                                                <option class="filter" value="tpaper">Technical Papers</option> -->
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-3" id="sort">
                                            <span>Sort by year:</span>
                                            <div class="btn-group pull-right"> 

                                                <button type="button" data-sort="data-year" data-order="desc" class="sort btn btn-default"><i class="icon-sort-by-order"></i></button>
                                                <button type="button" data-sort="data-year" data-order="asc" class="sort btn btn-default"><i class="icon-sort-by-order-alt"></i></button>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>

                            <div class="section color-2" id="pub-grid">
                                <div class="section-container">
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pitems">
                                                
                                                <div class="item mix cpaper" data-year="2013">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-warning">Conference Papers</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2012, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>


                                                <div class="item mix book" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-primary">Book</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2013">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2012, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>

                                                <div class="item mix bookchapter" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-info">Book Chapter</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2012, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>
                                                <div class="item mix cpaper" data-year="2012">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-warning">Conference Papers</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2012, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>


                                                <div class="item mix book" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-primary">Book</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2011">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2012, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>

                                                <div class="item mix bookchapter" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-info">Book Chapter</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2010, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>
                                                <div class="item mix cpaper" data-year="2011">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-warning">Conference Papers</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2011, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>


                                                <div class="item mix book" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-primary">Book</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2009">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2009, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>

                                                <div class="item mix bookchapter" data-year="2010">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">
                                                            The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                        </h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite">
                                                            <span class="label label-info">Book Chapter</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                        <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                        <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                            <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>

                                                <div class="item mix jpaper" data-year="2008">
                                                    <div class="pubmain">
                                                        <div class="pubassets"profile/>
                                                            
                                                            <a href="#" class="pubcollapse">
                                                                <i class="icon-expand-alt"></i>
                                                            </a>
                                                            <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                                <i class="icon-external-link"></i>
                                                            </a>
                                                            <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                                <i class="icon-cloud-download"></i>
                                                            </a>
                                                            
                                                        </div>

                                                        <h4 class="pubtitle">Cultivating admiration in brands: Warmth, competence, and landing in the “golden quadrant”</h4>
                                                        <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                        <div class="pubcite"><span class="label label-success">Journal Paper</span> Journal of Consumer Psychology, Volume 22, Issue 2, April 2008, Pages 191-194</div>
                                                        
                                                    </div>
                                                    <div class="pubdetails">
                                                        <h4>Abstract</h4>
                                                        <p>Although a substantial amount of research has examined the constructs of warmth and competence, far less has examined how these constructs develop and what benefits may accrue when warmth and competence are cultivated. Yet there are positive consequences, both emotional and behavioral, that are likely to occur when brands hold perceptions of both. In this paper, we shed light on when and how warmth and competence are jointly promoted in brands, and why these reputations matter.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div id="teaching" class="page">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <h2 class="title">Teaching</h2>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="title text-center">
                                        <h3>Currrent Teaching</h3>
                                    </div>
                                    <ul class="ul-dates">
                                        <li>
                                            <div class="dates">
                                                <span>Present</span>
                                                <span>1995</span>
                                            </div>
                                            <div class="content">
                                                <h4>Preclinical Endodnotics</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>Present</span>
                                                <span>2003</span>
                                            </div>
                                            <div class="content">
                                                <h4>SELC 8160 Molar Endodontic Selective</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>Present</span>
                                                <span>2010</span>
                                            </div>
                                            <div class="content">
                                                <h4>Endodontics Postdoctoral AEGD Program</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="section color-2">
                            <div class="section-container">
                                <div class="row">
                                    <div class="title text-center">
                                        <h3>Teaching History</h3>
                                    </div>
                                    <ul class="ul-dates-gray">
                                        <li>
                                            <div class="dates">
                                                <span>1997</span>
                                                <span>1995</span>
                                            </div>
                                            <div class="content">
                                                <h4>Preclinical Endodnotics</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>2005</span>
                                                <span>2003</span>
                                            </div>
                                            <div class="content">
                                                <h4>SELC 8160 Molar Endodontic Selective</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>2011</span>
                                                <span>2010</span>
                                            </div>
                                            <div class="content">
                                                <h4>Endodontics Postdoctoral AEGD Program</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>2011</span>
                                                <span>2010</span>
                                            </div>
                                            <div class="content">
                                                <h4>Endodontics Postdoctoral AEGD Program</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dates">
                                                <span>2011</span>
                                                <span>2010</span>
                                            </div>
                                            <div class="content">
                                                <h4>Endodontics Postdoctoral AEGD Program</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices ac elit sit amet porttitor. Suspendisse congue, erat vulputate pharetra mollis, est eros fermentum nibh, vitae rhoncus est arcu vitae elit.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div id="back" class="page">
                <?php 
                $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head."index.php/main/dashadmin";
// header('Refresh: 0; URL=' . $redirect7);


                ?>



                </div>
                
                 <div id="logout" class="page">
                <?php 
                $head=base_url();
$redirect7 = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] :
$head."index.php/main/logout";
// header('Refresh: 0; URL=' . $redirect7);


                ?>



                </div>
                  <div id="contact" class="page stellar">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <h2 class="title">Contact & Meet Me</h2>
                            
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>I would be happy to talk to you if you need my assistance in your research or whether you need bussiness administration support for your company. Though I have limited time for students but I Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                              
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-unstyled">
                                            <li>
                                                <strong><i class="icon-phone"></i>&nbsp;&nbsp;</strong>
                                                <span>office: 808-808 88 88</span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-phone"></i>&nbsp;&nbsp;</strong>
                                                <span>lab: 808-808 88 88</span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-envelope"></i>&nbsp;&nbsp;</strong>
                                                <span><a class="__cf_email__" href="http://owwwlab.com/cdn-cgi/l/email-protection" data-cfemail="b8d2dcd7ddf8cbccd9d6ded7cadc96dddccd">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-envelope"></i>&nbsp;&nbsp;</strong>
                                                <span><a class="__cf_email__" href="http://owwwlab.com/cdn-cgi/l/email-protection" data-cfemail="bbd1dfd4defbdcd6dad2d795d8d4d6">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-skype"></i>&nbsp;&nbsp;</strong>
                                                <span>jenniferDoe</span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-twitter"></i>&nbsp;&nbsp;</strong>
                                                <span>#jenniferDoe</span>
                                            </li>
                                            <li>
                                                <strong><i class="icon-linkedin-sign"></i>&nbsp;&nbsp;</strong>
                                                <span><a href="#">us.linkedin.com/in/jdoe</a></span>
                                            </li>
                                        </ul>    

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagecontents">
                        <div class="section contact-office" data-stellar-background-ratio="0.1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="title">At My Office</h2>
                                        <p>You can find me at my office located at Stanford University Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>I am at my office every day from 7:00 until 10:00 am, but you may consider a call to fix an appointment.</p>
                                    </div>
                                    <div class="col-md-4 text-center hidden-xs hidden-sm">
                                        <i class="icon-coffee icon-huge"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                    <div class="col-md-4 text-center hidden-xs hidden-sm">
                                        <i class="icon-stethoscope icon-huge"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <h2 class="title">At My Work</h2>
                                        <p>You can find me at my Work located at Stanford University Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>I am at my office every day from 7:00 until 10:00 am, but you may consider a call to fix an appointment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section contact-lab" data-stellar-background-ratio="0.1">
                            <div class="section-container">
                                <div class="row">
                                    
                                    <div class="col-md-8">
                                        <h2 class="title">At My Lab</h2>
                                        <p>You can find me at my office located at Stanford University Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <p>I am at my office every day from 7:00 until 10:00 am, but you may consider a call to fix an appointment.</p>
                                    </div>
                                    <div class="col-md-4 text-center hidden-xs hidden-sm">
                                        <i class="icon-superscript icon-huge"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               


                        </div>

    </body>
</html>