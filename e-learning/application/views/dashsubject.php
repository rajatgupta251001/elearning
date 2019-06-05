<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'fixed/header.php';?>
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
  <!--   <script type="text/javascript">

$(function () {
    $("#gg").slice(0, 8).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div:hidden").slice(0, 8).slideDown();
        if ($("div:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});
    </script> -->
     </head>
<body>
    


            <section class="content">

                <div class="main-heading">
                    <div class="row secBg padding-14">
                        <div class="medium-8 small-8 columns">
                            <div class="head-title">
                                <i class="fa fa-film"></i>
                                <h4><a href="<?php echo base_url();?>index.php/main/dashcourse/<?php echo $videotype;?>"><?php echo $dashcourse;?></a>/<a href="<?php echo base_url();?>index.php/main/dashcourse/<?php echo $videotype;?>"><?php echo $dashbranch;?></a>/<a href="<?php echo base_url();?>index.php/main/dashbranch/<?php echo $dashcourse;?>/<?php echo $dashbranch;?>/<?php echo $videotype;?>"><?php echo $dashsemester;?></a>/<a href="<?php echo base_url();?>index.php/main/dashbranch/<?php echo $dashcourse; ?>/<?php echo $dashbranch;?>/<?php echo $videotype;?>"><?php echo $dashsubject;?></a></h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="row column head-text clearfix">
                            <p class="pull-left">All Videos :</p>
                            <div class="grid-system pull-right show-for-large">
                                <a class="secondary-button current grid-default" href="#"><i class="fa fa-th"></i></a>
                                <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                        <div class="tabs-content">
                            <div class="tab-container tab-content active" data-content="1">
                                <div class="row list-group">


<?php
foreach($video as $vide)
{
 foreach($images as $image)
{
if($image->id == $vide->sno && $vide->active=="YES" && $vide->course==$dashcourse && $vide->branch==$dashbranch && $vide->semester==$dashsemester && $vide->subject==$dashsubject && $vide->videotype == $videotype)
{

?>
                                    <div class="item large-2 medium-6 columns group-item-grid-default" id="gg" style="">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="<?php echo base_url();?>assets/dashboardvideo/images/<?php echo $image->link;?>" alt="new video">
                                                <a class="hover-posts" href="<?php echo base_url();?>index.php/main/single/<?php echo $vide->sno;?>" >
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
}
?>




                                </div>
                            </div>
                        </div>
                        <div class="text-center row-btn">

<a href="#" id="loadMore" class="button radius">Load More</a>
                        </div>
                    </div>
                </div>
            </section>















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
