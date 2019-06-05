<?php include 'fixed/header.php';?>
<div class="content-push">




<!-- <?php print_r($doc);?> -->
<div class="information-blocks">

										<table class="table table-striped table-bordered table-hover dataTables-example" >

											<thead>

												<tr>


                          <th>Sno </th>
													<th>Name</th>


                          <th>Document</th>
                        </tr>
                      </thead>
                        <tbody>

                          <?php
                          $i=0;
                          while ($doc[$i]) {
                            # code...



?>
                            <tr>
                              <td><?php echo $i+1;?></td>

                              <td><?php  echo $doc[$i]->uploadname;?></td>

                              <td><?php echo $doc[$i]->shivam1;?></td>
                            </tr>
                            <?php
                            $i++;
                          }
                          ?>




                        </tbody>

                      </table>
                      <br>
                      <br>
                      <br>

</div>
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
