<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include 'fixed/header.php';?>
<div class="content-push">

                <div class="information-blocks">
 <div class="row">
                        <div class="col-md-3 information-entry blog-sidebar">
<div class="information-blocks categories-border-wrapper">

      
                                <div class="block-title size-3">Semester</div>
                                <div class="accordeon">
                                  
                                            <?php foreach($semester as $a) {
                                                if($a->course==$dashcourse && $a->branch==$dashbranch)
                                                {
                                                ?>
                                    <div class="accordeon-title"><?php echo $a->semester;?></div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">




<ul>
                                        <?php foreach($subject as $aa) {


                                  if($aa->course==$dashcourse && $aa->branch==$dashbranch && $a->semester==$aa->semester)
                              {
                                          ?>
                                            <li>               
 <a href="<?php echo base_url();?>index.php/maindocument/dashsubject/<?php echo $aa->course;?>/<?php echo $aa->branch;?>/<?php echo $aa->semester;?>/<?php echo $aa->subject;?>"><?php echo $aa->subject;?></a>
                                                          </li>
                                                         
                                                            <?php }}?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }}?>
                                </div>
                            </div>
</div>


  <div class="col-md-9 information-entry">
    <div class="information-blocks">

            <div class="breadcrumb-box dark" itemprop="breadcrumb">
               <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><?php echo $dashcourse;?></a>
               <a href="<?php echo base_url();?>index.php/maindocument/dashcourse"><?php echo $dashbranch;?></a>
               <a href="<?php echo base_url();?>index.php/maindocument/dashbranch/<?php echo $dashcourse;?>/<?php echo $dashbranch;?>"><?php echo $dashsemester;?></a>
               <a href="<?php echo base_url();?>index.php/maindocument/dashbranch/<?php echo $dashcourse; ?>/<?php echo $dashbranch;?>"><?php echo $dashsubject;?></a>                  
            </div>
     



<?php 
foreach($video as $vide)
{
 foreach($images as $image)
{
if($image->id == $vide->sno && $vide->active=="YES" && $vide->course==$dashcourse && $vide->branch==$dashbranch && $vide->semester==$dashsemester && $vide->subject==$dashsubject)
{

?>

<div class="inline-product-entry col-md-4" style="height: 200px;">
                                <a href="<?php echo base_url();?>index.php/maindocument/single/<?php echo $vide->sno;?>" class="image"><img alt="" src="<?php echo base_url();?>assets/dashboardvideo/images/<?php echo $image->link;?>"></a>
                                <div class="content">
                                    <div class="cell-view">
                                        <a href="<?php echo base_url();?>index.php/maindocument/single/<?php echo $vide->sno;?>" class="title"><?php echo $vide->title;?></a>
                                        <div class="price">
                                            <div>  <i class="fa fa-clock-o"></i>
                                                        <?php echo $image->date;?></div>
                                                        <div><i class="fa fa-user"></i>
                                                        <a href="#"><?php echo $image->uploadname;?></a></div>
                                                        
                                            <div> <i class="fa fa-eye"></i>
                                                        <?php echo $image->views;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>


                                              
                                                                                        

<?php 

}
}
}
?>              


                         
            


</div>



       



            </div>
            </div>

            </div>

                            <div style="height: 60px;"></div>
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
</body>
</html>























                                    

                                        


