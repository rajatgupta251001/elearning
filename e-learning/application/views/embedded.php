<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning video&Animation</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/css/layerslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboardvideo/css/responsive.css">
     </head>
<body>

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
              <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive" data-off-canvas>
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
                <li class="has-submenu">
                 <a href="<?php echo base_url();?>"><i class="fa fa-home"></i>Home</a>
                                                
                                            </li>
                                             <li>
                                                <a href="<?php echo base_url();?>index.php/main/commingsoon"><i class="fa fa-edit"></i>QUERY(LIVE CHAT)</a>
                                                
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><i class="fa fa-file"></i>DOCUMENT</a>
                                               
                                            </li> 
                                            <li class="has-submenu">
                                                <a href="#"><i class="fa fa-file"></i>Video & Animation</a>
                                                 <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/video"><i class="fa fa-file"></i>Video</a></li>
                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/anmi"><i class="fa fa-file"></i>Animation</a></li>
                    </ul>
                                            </li>
                                            <li>
                                                <a href="http://nptel.kiet.edu"><i class="fa fa-file"></i>Nptel</a>
                                               
                                            </li>
                                            <li>
                                                <a href="http://lms.kiet.edu"><i class="fa fa-file"></i>Moodle</a>
                                               
                                            </li>

            </ul>
            <div class="responsive-search">
              <form method="post" action="<?php echo base_url();?>index.php/main/search_video">
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here" name="search">
                        <div class="input-group-button">
                            <button type="submit" ><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>About Developer</h6>
                <a href="https://www.facebook.com/kiet.elearning"><i class="fa fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCU1uIOMUiu_yKI_RMD_m0QA"><i class="fa fa-youtube"></i></a>
                            </div>
            <div class="top-button">
                <ul class="menu">
                     <li class="dropdown-login">
                       <h6 class="text-center">Welcome:<?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></h6>
                                           <a href="<?php echo base_url();?>index.php/main/changepass" style="align:center"><button>Edit Profile/Change Password</button></a> 
                                           <?php
                                           if($pdata['rank']=='admin')
                                           {
                                            ?>
                                           <a href="<?php echo base_url();?>index.php/main/upload/BTECH/BIO_TECH/I/WEB" style="align:center"><button>Upload</button></a>
                                           <?php } ?>

                                           <a href="<?php echo base_url();?>index.php/main/logout" style="align:center"><button>Log Out</button></a>
                    </li>
                </ul>
            </div>
        </div>













        <div class="off-canvas-content" data-off-canvas-content>
            <header>
                
                <section id="top" class="topBar show-for-large">
                    <div class="row">
                        <div class="medium-6 columns">
                            <div class="socialLinks">
                <a href="https://www.facebook.com/kiet.elearning"><i class="fa fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCU1uIOMUiu_yKI_RMD_m0QA"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    <div class="medium-6 columns">
                            <div class="top-button">
                                <ul class="menu float-right">
                                        <li class="dropdown-login">
                                        <a class="loginReg" data-toggle="example-dropdown" href="#">Welcome</a>
                                        <div class="login-form">
                                            <h6 class="text-center">Name:<?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></h6>
                                          <a href="<?php echo base_url();?>index.php/main/changepass" style="align:center"><button>Edit Profile/Change Password</button></a>
                                            <?php
                                           if($pdata['rank']=='admin')
                                           {
                                            ?>
                                          <li> <a href="<?php echo base_url();?>index.php/main/upload/BTECH/BIO_TECH/I/WEB" style="align:center"><button>Upload</button></a>
                                           <?php } ?></li>
                                          <li> <a href="<?php echo base_url();?>index.php/main/logout" style="align:center"><button>Log Out</button></a></li>

                                        


                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section> 

                <section id="navBar">
                    <nav class="sticky-container" data-sticky-container>
                        <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #fff;" data-sticky-on="large">
                            <div class="row">
                                <div class="large-12 columns">
                                <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                                    <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"></button>
                                    <div class="title-bar-title"><a href="<?php echo base_url();?>" ><img style="background-color:black;" src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo small" style="width:100px;height:100px;"></a></div>
                                </div>

                                <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                                    <div class="top-bar-left">
                                        <ul class="menu">
                                            <li class="menu-text">
                                                <a href="<?php echo base_url(); ?>"  style="width:200px;"><img style="background-color:black;" src="<?php echo base_url();?>assets/dashboardvideo/images/logo.png" alt="E- learning logo"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-bar-right search-btn">
                                        <ul class="menu">
                                            <li class="search">
                                                <i class="fa fa-search"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-bar-right">
                                        <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                                          <li class="has-submenu">
                 <a href="<?php echo base_url();?>"><i class="fa fa-home"></i>Home</a>
                                                
                                            </li>
                                             <li>
                                                <a href="<?php echo base_url();?>index.php/main/commingsoon"><i class="fa fa-edit"></i>QUERY(LIVE CHAT)</a>
                                                
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><i class="fa fa-file"></i>DOCUMENT</a>
                                               
                                            </li> 
                                            <li class="has-submenu">
                                                <a href="#"><i class="fa fa-file"></i>Video & Animation</a>
                                                 <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/video"><i class="fa fa-file"></i>Video</a></li>
                        <li><a href="<?php echo base_url();?>index.php/main/dashcourse/anmi"><i class="fa fa-file"></i>Animation</a></li>
                    </ul>
                                            </li>
                                             
                    
                  
                
                                            <li>
                                                <a href="http://nptel.kiet.edu"><i class="fa fa-file"></i>Nptel</a>
                                               
                                            </li>
                                            <li>
                                                <a href="http://lms.kiet.edu"><i class="fa fa-file"></i>Moodle</a>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div id="search-bar" class="clearfix search-bar-light">
                                <form method="post" action="<?php echo base_url();?>index.php/main/search_video">
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <div class="search-input float-left">
                                        <input type="search" name="search" placeholder="Seach Here your video">
                                    </div>
                                    <div class="search-btn float-right text-right">
                                        <button class="button" type="submit">search now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </section>
            </header>

            </section> 
            <div class="row">
               
                <div class="large-8 columns">
                  
                    <section class="inner-video">
                        <div class="row secBg">
                            <div class="large-12 columns inner-flex-video">
                                <div class="flex-video widescreen">
<?php
 foreach($video as $vide)
{
if($vide->sno == $embedded)
{
echo html_entity_decode($vide->embedded);
$right=$vide->subject;
$title1=$vide->title;
$description1=$vide->description;
}
} 
?>
                                </div>
                            </div>
                        </div>
                    </section>
                     <section class="SinglePostStats">
                             <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="author-img-sec">
                                            <div class="thumbnail author-single-post">
                                                <a href="#"><img src= "<?php echo base_url();?>assets/dashboardvideo/images/e-learning.jpg" alt="post"></a>
                                            </div>
                                            <?php 
                                            foreach ($images as $name) {
                                        if($name->id == $embedded)
                                        {
                                            $ff=$name->uploadname;
                                         $date1=$name->date;
                                        $view11=$name->views;
                                        $comments=$name->comment;
                                            }
                                        }
                                            ?>


                                            <p class="text-center"><a href="#"><?php echo $ff;?></a></p>
                                        </div>
                                    </div>
                                    <div class="media-object-section object-second">
                                        <div class="author-des clearfix">
                                            <div class="post-title">
                                                <h4><?php echo $title1;?></h4>

                                                <p><b><?php echo $description1;?></b></p>
                                                <p>
                                                    <span><i class="fa fa-clock-o"><?php echo " ".$date1;?></i></span>
                                                    <span><i class="fa fa-eye"></i><?php echo $view11; ?></span>
                                                    <span><i class="fa fa-commenting"></i><?php echo $comments; ?></span>
                                                </p>
                                            </div>
                                            <div class="subscribe">
                                                
                                                    <a href="https://www.youtube.com/channel/UC4rxBQyVV00oGX9-m2aqKYw"><button type="submit" name="subscribe">Subscribe</button></a>
                                                
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
 <!-- <section class="content comments">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="main-heading borderBottom">
                                    <div class="row padding-14">
                                        <div class="medium-12 small-12 columns">
                                            <div class="head-title">
                                                <i class="fa fa-comments"></i>
                                                <h4>Comments <span>(<?php echo $comments; ?>)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-box thumb-border">
                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "<?php echo base_url();?>assets/dashboardvideo/images/e-learning.jpg" alt="comment">
                                            </div>
                                            <h6><a href="#"><?php $pdata = $this->session->userdata('logged_in');
                                            echo $pdata['username'];
                                            ?></a></h6>
                                        </div>
                                        <div class="media-object-section comment-textarea">
                                            <form method="post">
                                                <textarea name="commentText" placeholder="Add a comment here.." title="avoid use of special character"></textarea>
                                                <input type="submit" name="submit" value="send">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            

                                   <div class="main-comment showmore_one">
                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "<?php echo base_url();?>assets/dashboardvideo/images/e-learning.jpg" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class='reply float-right hide-reply'></span>
                                            </div>

                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src= "images/post-author-post.png" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class='reply float-right hide-reply'></span>
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src= "images/post-author-post.png" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class='reply float-right hide-reply'></span>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "images/post-author-post.png" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class='reply float-right hide-reply'></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src= "images/post-author-post.png" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class='reply float-right hide-reply'></span>
                                            </div>
                                            
                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src= "images/post-author-post.png" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class='reply float-right hide-reply'></span>
                                                    </div>
                                                   
                                                    <div class="media-object stack-for-small reply-comment">
                                                        <div class="media-object-section comment-img text-center">
                                                            <div class="comment-box-img">
                                                                <img src= "images/post-author-post.png" alt="comment">
                                                            </div>
                                                        </div>
                                                        <div class="media-object-section comment-desc">
                                                            <div class="comment-title">
                                                                <span class="name"><a href="#">Joseph John</a> Said:</span>
                                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                            </div>
                                                            <div class="comment-btns">
                                                                <span><a href="#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                                <span><a href="#"><i class="fa fa-share"></i>Reply</a></span>
                                                                <span class='reply float-right hide-reply'></span>
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
                    </section>-->

                    <section class="content content-with-sidebar related">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="main-heading borderBottom">
                                    <div class="row padding-14">
                                        <div class="medium-12 small-12 columns">
                                            <div class="head-title">
                                                <i class="fa fa-film"></i>
                                                <h4>Related Videos</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row list-group">
                                   
                                                                        

<?php 
foreach($video as $vide)
{
 foreach($images as $image)
{
if(($image->id == $vide->sno ) && ($right == $vide->subject) &&($vide->sno !=$embedded))
{
?>


                                    <div class="item large-3 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="<?php echo base_url();?>assets/dashboardvideo/images/<?php echo $image->link;?>" alt="landing">
                                                <a href="<?php echo base_url();?>index.php/main/single/<?php echo $vide->sno;?>" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span><?php echo $image->likes;?></span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span><?php echo $image->length;?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="<?php echo base_url();?>index.php/main/single/<?php echo $vide->sno;?>"><?php echo $vide->title;?></a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#"><?php echo $image->uploadname;?></a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span><?php echo $image->date;?></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span><?php echo $image->views;?></span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p><?php echo $vide->description;?>.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="<?php echo base_url();?>index.php/main/single/<?php echo $vide->sno;?>" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <?php 
                                   }
                                   }
                                   }?>

                                    
                                </div>
                            </div>
                        </div>
                    </section> 
                 


            </div>
                 <div class="large-4 columns">
                    <aside class="secBg sidebar">
                        <div class="row"> 
                          
                           <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Search Videos</h5>
                                    </div>
                                    <form method="post" action="<?php echo base_url();?>index.php/main/search_video">
                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" placeholder="Enter your keyword" name="search">
                                            <div class="input-group-button">
                                                <input type="submit" class="button" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                             <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Most View Videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                       

<?php 
foreach($video as $vide)
{
 foreach($images as $image)
{
if($image->id == $vide->sno && $image->views > 10)
{
?>



                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="<?php echo base_url();?>assets/dashboardvideo/images/<?php echo $image->link;?>" alt="most viewed videos">
                                                <a href="<?php echo base_url();?>index.php/main/single/<?php echo $vide->sno;?>" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="#"><?php echo $vide->title;?></a></h6>
                                                <h6><a href="#">(<?php echo $vide->subject;?>)</a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="#"><?php echo $image->uploadname;?></a></span>
                                                    <span><i class="fa fa-clock-o"></i><?php echo $image->date;?></span>
                                                    <span><i class="fa fa-eye"></i><?php echo $image->views;?></span>
                                                </p>
                                            </div>
                                        </div>
                                        
                                      

                                      <?php }}}?>  
                                        
                                    </div>
                                </div>
                            </div> 

                    </div>
                    </div>
                    </aside>
                    </div>
                    </div>
                    </div>
          






            <footer>
                <div class="row">
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>About E-learning</h5>
                            </div>
                            <div class="textwidget">
                            Moving the kietians to the new area of technology,where they can learn,explore there skills online.
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent Videos</h5>
                            </div>
                            <div class="widgetContent">
                            <?php 
                            $i=1;

 foreach($active as $activ) 
 {
if($i<=3)
{
foreach($images as $image) 
  {
if($activ->sno == $image->id)
{
  ?>

         
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                           <img src="<?php echo base_url(); ?>assets/dashboardvideo/images/<?php echo $image->link; ?>" alt="E-learning">
                                            <a href="<?php echo base_url();?>index.php/main/single/<?php echo $activ->sno;?>" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            
                                <h6><?php echo $activ->title;?></h6>
                                <p><?php echo $activ->title;?></p>
                                            <p >
                                            <i class="fa fa-user"></i><span style="font-size:60%;"><?php echo $image->uploadname;?></span>

                                            <i class="fa fa-clock-o"></i><span style="font-size:60%;"><?php echo $image->date;?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                             <?php  
} 

}
}
 $i++;
 }

 ?>                              
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Tags</h5>
                            </div>
                            <div class="tagcloud">

                            
  <?php 

                              foreach($course as $cours) 
                              {
?>
                                <a href="#"><?php echo $cours->course;?></a>
                           <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            
                            <div class="widgetContent">
                              
                                <div class="social-links">
                                    <h5>About Developer</h5>
                <a class="secondary-button" href="https://www.facebook.com/kiet.elearning"><i class="fa fa-facebook"></i></a>
                <a class="secondary-button" href="https://www.youtube.com/channel/UCU1uIOMUiu_yKI_RMD_m0QA"><i class="fa fa-youtube"></i></a>
                

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
            </footer>
            <div id="footer-bottom">
            
                <div class="btm-footer-text text-center">
                    <p style="color:#fff !important"> 2016 © Design & Developed by-:Team E-learning</p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/what-input/what-input.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/bower_components/foundation-sites/dist/foundation.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/jquery.showmore.src.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/greensock.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/inewsticker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/dashboardvideo/js/jquery.kyco.easyshare.js" type="text/javascript"></script>

   
</html>