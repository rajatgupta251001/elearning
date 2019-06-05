<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">
        <title>Super Admin E-learning</title>
            
        <!-- CSS -->
        <link href="<?php echo base_url(); ?>assets/super/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/form.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/calendar.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/icons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/super/css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-tectile">

        <header id="header" class="media">
            <a href="#" id="menu-toggle"></a> 
            <a class="logo pull-left" href="<?php echo base_url();?>index.php/main/dashsuper">SUPER ADMIN E-learning</a>
            
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                        <a data-drawer="messages" class="drawer-toggle" href="#">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="#">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>

                    

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="#" data-toggle="dropdown">
                            <img class="profile-pic animated" src="<?php echo base_url(); ?>assets/dashboardvideo/images/logo.png" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="#">My Profile</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="#">Messages</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="#">Settings</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="<?php echo base_url();?>index.php/main/logout">Sign Out</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">E-learning</h4>
                        elearning.kiet@gmail.com
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                    
                    <!-- Feeds -->
                    <!-- <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                           News Feeds
                        </h2>
                        
                        <div class="s-widget-body">
                            <div id="news-feed">
                                <li class="m-b-10">
                                <span class="itemTitle">
                                <a href="" target="">zxcvxbc
                                
                                <div class="itemContent">
                                    xdfggh
                                </div>
                                <ul class="feedEkList list-unstyled">ss
                                
                                <small class="itemDate text-muted m-l-10">Xzvxbvb</small></ul>
                                </a>
                                </span>
                                </li>
                            </div>
                        </div>
                    </div> -->
                    
                    <!-- Projects -->
                    <div class="s-widget m-b-25">
                        <h2 class="tile-title">
                           Project on going
                        </h2>
                        
                        <div class="s-widget-body">
                            <div class="side-border">
                                <small>E-learning</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="progress-bar tooltips progress-bar-danger" style="width: 10%;" data-original-title="10%">
                                          <span class="sr-only">10% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>kiet.edu</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-info" style="width: 0%;" data-original-title="0%">
                                          <span class="sr-only">0% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>Online voting</small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-warning" style="width: 81%;" data-original-title="81%">
                                          <span class="sr-only">81% Complete</span>
                                     </a>
                                </div>
                            </div>
                            <div class="side-border">
                                <small>En Hod 18 nov confrence </small>
                                <div class="progress progress-small">
                                     <a href="#" data-toggle="tooltip" title="" class="tooltips progress-bar progress-bar-success" style="width: 10%;" data-original-title="10%">
                                          <span class="sr-only">10% Complete</span>
                                     </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="index-2.html">
                            <span class="menu-item">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-typography" href="typography.html">
                            <span class="menu-item">Typography</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-widget" href="content-widgets.html">
                            <span class="menu-item">Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-table" href="tables.html">
                            <span class="menu-item">Tables</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-form" href="#">
                            <span class="menu-item">Form</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="form-elements.html">Basic Form Elements</a></li>
                            <li><a href="form-components.html">Form Components</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-ui" href="#">
                            <span class="menu-item">User Interface</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="labels.html">Labels</a></li>
                            <li><a href="images-icons.html">Images &amp; Icons</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="media.html">Media</a></li>
                            <li><a href="components.html">Components</a></li>
                            <li><a href="other-components.html">Others</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-photos" href="#">
                            <span class="menu-item">PHOTO GALLERY</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            
                            <li><a href="photo-gallery-alt.html">Photo Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="sa-side-chart" href="charts.html">
                            <span class="menu-item">Charts</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-folder" href="file-manager.html">
                            <span class="menu-item">File Manager</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-calendar" href="calendar.html">
                            <span class="menu-item">Calendar</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="sa-side-page" href="#">
                            <span class="menu-item">Pages</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="list-view.html">List View</a></li>
                            <li><a href="profile-page.html">Profile Page</a></li>
                            <li><a href="messages.html">Messages</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                </ul>

            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
            
                <!-- Messages Drawer -->
                <div id="messages" class="tile drawer animated">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="#">Send a New Message</a>
                            <span class="drawer-close">&times;</span>
                            
                        </div>
                        <div class="overflow" style="height: 254px">
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                                    <a class="t-overflow" href="#">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                                    <a class="t-overflow" href="#">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="#">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                                    <a class="t-overflow" href="#">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="#">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                                    <a class="t-overflow" href="#">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 17/12/2013</small><br>
                                    <a class="t-overflow" href="#">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 18/12/2013</small><br>
                                    <a class="t-overflow" href="#">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Wendy Mitchell - On 19/12/2013</small><br>
                                    <a class="t-overflow" href="#">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
                            <a href="#"><small>VIEW ALL</small></a>
                        </div>
                    </div>
                </div>
                
                <!-- Notification Drawer -->
                <div id="notifications" class="tile drawer animated">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="#">Notification Settings</a>
                            <span class="drawer-close">&times;</span>
                        </div>
                        <div class="overflow" style="height: 254px">
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - 2 Hours ago</small><br>
                                    <a class="t-overflow" href="#">Mauris consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - 5 Hours ago</small><br>
                                    <a class="t-overflow" href="#">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Harris worgon - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="#">Maecenas venenatis enim condimentum ultrices fringilla. Nulla eget libero rhoncus, bibendum diam eleifend, vulputate mi. Fusce non nibh pulvinar, ornare turpis id</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Mitch Bradberry - On 14/12/2013</small><br>
                                    <a class="t-overflow" href="#">Phasellus interdum felis enim, eu bibendum ipsum tristique vitae. Phasellus feugiat massa orci, sed viverra felis aliquet quis. Curabitur vel blandit odio. Vestibulum sagittis quis sem sit amet tristique.</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">Nadin Jackson - On 15/12/2013</small><br>
                                    <a class="t-overflow" href="#">Ipsum wintoo consectetur urna nec tempor adipiscing. Proin sit amet nisi ligula. Sed eu adipiscing lectus</a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <small class="text-muted">David Villa - On 16/12/2013</small><br>
                                    <a class="t-overflow" href="#">Suspendisse in purus ut nibh placerat Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
                            <a href="#"><small>VIEW ALL</small></a>
                        </div>
                    </div>
                </div>
                
                <!-- Breadcrumb -->
                <ol class="breadcrumb hidden-xs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                
                <h4 class="page-title">DASHBOARD</h4>
                                
                <!-- Shortcuts -->
                <div class="block-area shortcut-area">
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/money.png" alt="">
                        <small class="t-overflow">Purchases</small>
                    </a>
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/twitter.png" alt="">
                        <small class="t-overflow">Tweets</small>
                    </a>
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/calendar.png" alt="">
                        <small class="t-overflow">Calendar</small>
                    </a>
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/stats.png" alt="">
                        <small class="t-overflow">Statistics</small>
                    </a>
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/connections.png" alt="">
                        <small class="t-overflow">Connection</small>
                    </a>
                    <a class="shortcut tile" href="#">
                        <img src="<?php echo base_url(); ?>assets/super/img/shortcuts/reports.png" alt="">
                        <small class="t-overflow">Reports</small>
                    </a>
                </div>
                
                <hr class="whiter" />
                
                <!-- Quick Stats -->
                <div class="block-area">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats">
                                <div id="stats-line-2" class="pull-left"></div>
                                <div class="data">
                                    <h2 data-value="98">0</h2>
                                    <small>Tickets Today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">
                                <div id="stats-line-3" class="pull-left"></div>
                                <div class="media-body">
                                    <h2 data-value="1452">0</h2>
                                    <small>Shipments today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">

                                <div id="stats-line-4" class="pull-left"></div>

                                <div class="media-body">
                                    <h2 data-value="4896">0</h2>
                                    <small>Orders today</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="tile quick-stats media">
                                <div id="stats-line" class="pull-left"></div>
                                <div class="media-body">
                                    <h2 data-value="29356">0</h2>
                                    <small>Site visits today</small>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <hr class="whiter" />
                
                <!-- Main Widgets -->
               
                <div class="block-area">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Main Chart -->
                            <div class="tile">
                                <h2 class="tile-title">Statistics</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a class="tile-info-toggle" href="#">Chart Information</a></li>
                                        <li><a href="#">Refresh</a></li>
                                        <li><a href="#">Settings</a></li>
                                    </ul>
                                </div>
                                <div class="p-10">
                                    <div id="line-chart" class="main-chart" style="height: 250px"></div>

                                    <div class="chart-info">
                                        <ul class="list-unstyled">
                                            <li class="m-b-10">
                                                Total Sales 1200
                                                <span class="pull-right text-muted t-s-0">
                                                    <i class="fa fa-chevron-up"></i>
                                                    +12%
                                                </span>
                                            </li>
                                            <li>
                                                <small>
                                                    Local 640
                                                    <span class="pull-right text-muted t-s-0"><i class="fa m-l-15 fa-chevron-down"></i> -8%</span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <small>
                                                    Foreign 560
                                                    <span class="pull-right text-muted t-s-0">
                                                        <i class="fa m-l-15 fa-chevron-up"></i>
                                                        -3%
                                                    </span>
                                                </small>
                                                <div class="progress progress-small">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>  
                            </div>
    
                            <!-- Pies -->
                            <div class="tile text-center">
                                <div class="tile-dark p-10">
                                    <div class="pie-chart-tiny" data-percent="86">
                                        <span class="percent"></span>
                                        <span class="pie-title">New Visitors <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="23">
                                        <span class="percent"></span>
                                        <span class="pie-title">Bounce Rate <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="57">
                                        <span class="percent"></span>
                                        <span class="pie-title">Emails Sent <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="34">
                                        <span class="percent"></span>
                                        <span class="pie-title">Sales Rate <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                    <div class="pie-chart-tiny" data-percent="81">
                                        <span class="percent"></span>
                                        <span class="pie-title">New Signups <i class="m-l-5 fa fa-retweet"></i></span>
                                    </div>
                                </div>
                            </div>

                            <!--  Recent Postings -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Recent Postings</h2>
                                        <div class="tile-config dropdown">
                                            <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                            <ul class="dropdown-menu animated pull-right text-right">
                                                <li><a href="#">Refresh</a></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="listview narrow">
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">2 Hours ago by Adrien San</small><br/>
                                                    <a class="t-overflow" href="#">Cras molestie fermentum nibh, ac semper</a>
                                                   
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">5 Hours ago by David Villa</small><br/>
                                                    <a class="t-overflow" href="#">Suspendisse in purus ut nibh placerat</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 15/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="#">Cras pulvinar euismod nunc quis gravida. Suspendisse pharetra</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 14/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="#">Cras pulvinar euismod nunc quis gravida. </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-l-5">
                                                <div class="pull-left">
                                                    <img width="40" src="<?php echo base_url(); ?>assets/super/img/profile-pics/5.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <small class="text-muted">On 13/12/2013 by Mitch bradberry</small><br/>
                                                    <a class="t-overflow" href="#">Integer a eros dapibus, vehicula quam accumsan, tincidunt purus</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="media p-5 text-center l-100">
                                                <a href="#"><small>VIEW ALL</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Tasks to do -->
                                <div class="col-md-6">
                                    <div class="tile">
                                        <h2 class="tile-title">Tasks to do</h2>
                                        <div class="tile-config dropdown">
                                            <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                            <ul class="dropdown-menu pull-right text-right">
                                                <li id="todo-add"><a href="#">Add New</a></li>
                                                <li id="todo-refresh"><a href="#">Refresh</a></li>
                                                <li id="todo-clear"><a href="#">Clear All</a></li>
                                            </ul>
                                        </div>
                                        
                                        <div class="listview todo-list sortable">
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Curabitur quis nisi ut nunc gravida suscipis
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Suscipit at feugiat dewoo
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Gravida wendy lorem ipsum seen
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox">
                                                        Fedrix quis nisi ut nunc gravida suscipit at feugiat purus
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <h2 class="tile-title">Completed Tasks</h2>
                                        
                                        <div class="listview todo-list sortable">
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Motor susbect win latictals bin the woodat cool
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Wendy mitchel susbect win latictals bin the woodat cool
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            <div class="media">
                                                <div class="checkbox m-0">
                                                    <label class="t-overflow">
                                                        <input type="checkbox" checked="checked">
                                                        Latictals bin the woodat cool for the win
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="col-md-4">
                            <!-- USA Map -->
                            <div class="tile">
                                <h2 class="tile-title">Live Visits</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="#">Refresh</a></li>
                                        <li><a href="#">Settings</a></li>
                                    </ul>
                                </div>
                                
                                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55984.72184996624!2d77.42872797153947!3d28.718197690149267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf47204fb9241%3A0xf5c6d6eefa89a5df!2sKIET+Group+of+Instituions!5e0!3m2!1sen!2s!4v1477418507161" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                            </div>
    
                            <!-- Dynamic Chart -->
                            <div class="tile">
                                <h2 class="tile-title">Server Process</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="#">Refresh</a></li>
                                        <li><a href="#">Settings</a></li>
                                    </ul>
                                </div>

                                <div class="p-t-10 p-r-5 p-b-5">
                                    <div id="dynamic-chart" style="height: 200px"></div>
                                </div>

                            </div>
                            
                            <!-- Activity -->
                            <div class="tile">
                                <h2 class="tile-title">Social Media activities</h2>
                                <div class="tile-config dropdown">
                                    <a data-toggle="dropdown" href="#" class="tile-menu"></a>
                                    <ul class="dropdown-menu pull-right text-right">
                                        <li><a href="#">Refresh</a></li>
                                        <li><a href="#">Settings</a></li>
                                    </ul>
                                </div>
                                
                                <div class="listview narrow">
                                    
                                    <div class="media">
                                        <div class="pull-right">
                                            <div class="counts">367892</div>
                                        </div>
                                        <div class="media-body">
                                            <h6>FACEBOOK LIKES</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="media">
                                        <div class="pull-right">
                                            <div class="counts">2012</div>
                                        </div>
                                        <div class="media-body">
                                            <h6>GOOGLE +1s</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="media">
                                        <div class="pull-right">
                                            <div class="counts">56312</div>
                                        </div>
                                        <div class="media-body">
                                            <h6>YOUTUBE VIEWS</h6>
                                        </div>
                                    </div>
                                    
                                    <div class="media">
                                        <div class="pull-right">
                                            <div class="counts">785879</div>
                                        </div>
                                        <div class="media-body">
                                            <h6>TWITTER FOLLOWERS</h6>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="pull-right">
                                            <div class="counts">68</div>
                                        </div>
                                        <div class="media-body">
                                            <h6>WEBSITE COMMENTS</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <!-- Chat -->
                <div class="chat">
                    
                    <!-- Chat List -->
                    <div class="pull-left chat-list">
                        <div class="listview narrow">
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" width="30" alt="">
                                <div class="media-body p-t-5">
                                    Alex Bendit
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">David Volla Watkinson</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/3.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Mitchell Christein</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/4.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Wayne Parnell</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/5.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Melina April</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/6.jpg" width="30" alt="">
                                <div class="media-body">
                                    <span class="t-overflow p-t-5">Ford Harnson</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Chat Area -->
                    <div class="media-body">
                        <div class="chat-header">
                            <a class="btn btn-sm" href="#">
                                <i class="fa fa-circle-o status m-r-5"></i> Chat with Friends
                            </a>
                        </div>
                    
                        <div class="chat-body">
                            <div class="media">
                                <img class="pull-right" src="<?php echo base_url(); ?>assets/super/img/profile-pics/1.jpg" width="30" alt="" />
                                <div class="media-body pull-right">
                                    Hiiii<br/>
                                    How you doing bro?
                                    <small>Me - 10 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-left">
                                <img class="pull-left" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    I'm doing well buddy. <br/>How do you do?
                                    <small>David - 9 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-right">
                                <img class="pull-right" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    I'm Fine bro <br/>Thank you for asking
                                    <small>Me - 8 Mins ago</small>
                                </div>
                            </div>
                            
                            <div class="media pull-right">
                                <img class="pull-right" src="<?php echo base_url(); ?>assets/super/img/profile-pics/2.jpg" width="30" alt="" />
                                <div class="media-body">
                                    Any idea for a hangout?
                                    <small>Me - 8 Mins ago</small>
                                </div>
                            </div>
                        
                        </div>
                    
                        <div class="chat-footer media">
                            <i class="chat-list-toggle pull-left fa fa-bars"></i>
                            <i class="pull-right fa fa-picture-o"></i> 
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Type something..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

          
        </section>
        
        
        <script src="<?php echo base_url(); ?>assets/super/js/jquery.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/jquery-ui.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/jquery.easing.1.3.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/super/js/charts/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/super/js/charts/jquery.flot.time.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/charts/jquery.flot.animator.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/charts/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/super/js/sparkline.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/easypiechart.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/charts.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/maps/jvectormap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/super/js/icheck.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/scroll.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/super/js/calendar.min.js"></script>
        <!-- <script src="<?php echo base_url(); ?>assets/super/js/feeds.min.js"></script> -->
        <script src="<?php echo base_url(); ?>assets/super/js/functions.js"></script>
    </body>
</html>
