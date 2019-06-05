<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
                <a class="tab-switcher active">Submittion</a>


                <!-- <a class="tab-switcher">Leaders board</a> -->


                <div class="clear"></div>
            </div>




        </div>
        <div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">
                      <div class="information-blocks">
                          <div class="categories-list">

<table class="table table-striped table-bordered table-hover dataTables-example" >

											<thead>

												<tr>

                          <th>Sno </th>
                          													<th>Ques Id</th>


                          													<th>Username</th>
                          													<th>File name</th>
                          													<th>Language</th>
                          													<th>Status</th>
                                                    <th>Date Time</th>
                        </tr>
                      </thead>
                        <tbody>

                          <?php
                          $i=0;
                          while ($ss[$i]) {
                            # code...



?>
                            <tr>
                              <td><?php echo $i+1;?></td>
                              <td><?php  echo $ss[$i]->ques_id;?></td>

                            															<td><?php echo $ss[$i]->username;?></td>
                            															<td><?php echo $ss[$i]->file_name;?></td>
                            															<td><?php echo $ss[$i]->lang;?></td>
                            															<td><?php echo $ss[$i]->status;?></td>
                            															<td><?php echo $ss[$i]->datetime;?></td>
                            </tr>
                            <?php
                            $i++;
                          }
                          ?>




                        </tbody>

                      </table>
                    




                          </div>
                      </div>


                    </div>
                </div>
            </div>









        </div>
    </div>
</div>
<br>


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
<link href="<?php echo base_url();?>assets/dataTables/datatables.min.css" rel="stylesheet">



		<script src="<?php echo base_url();?>assets/dataTables/datatables.min.js"></script>


		<script>

			$(document).ready(function(){

				$('.dataTables-example').DataTable({

					pageLength: 25,

					responsive: true,

					dom: '<"html5buttons"B>lTfgitp',

					buttons: [

					{ extend: 'copy'},

					{extend: 'csv'},

					{extend: 'excel', title: 'ExampleFile'},

					{extend: 'pdf', title: 'ExampleFile'},



					{extend: 'print',

					customize: function (win){

						$(win.document.body).addClass('white-bg');

						$(win.document.body).css('font-size', '10px');



						$(win.document.body).find('table')

						.addClass('compact')

						.css('font-size', 'inherit');

					}

				}

				]



			});



			});



		</script>
</body>
</html>
