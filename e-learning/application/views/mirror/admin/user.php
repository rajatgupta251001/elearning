<?php include 'fixed/header.php';?>

<div class="information-blocks">
    <div class="tabs-container style-1">
        <div class="swiper-tabs tabs-switch">



            <div class="list">
                <a class="tab-switcher active">User</a>


                <a class="tab-switcher">Add User</a>


                <div class="clear"></div>
            </div>




        </div>
        <div>
            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">




                      <table class="table table-striped table-bordered table-hover dataTables-example" >

                      											<thead>

                      												<tr>

                                                <th>Sno </th>



                                                													<th>Username</th>
                                                													<th>Password</th>
                                                													<th>Rank</th>
                                                													<th>Time</th>

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


                                                  															<td><?php echo $ss[$i]->username;?></td>
                                                  															<td><?php echo $ss[$i]->password;?></td>
                                                  															<td><?php echo $ss[$i]->rank;?></td>
                                                  															<td><?php echo $ss[$i]->time;?></td>
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




            <div class="tabs-entry">
                <div class="article-container style-1">
                    <div class="row">

                  <form action="<?php echo base_url();?>index.php/code/admin_user" method="POST">
<label>Names(with semicolon)</label><textarea name="user" style="width:100%;height:200px;" required></textarea>
<label>
Password</label>
<input type="text" name="password" class="col-md-12" required>
<label>
Times(Minutes)</label>
<input type="text" name="minutes" class="col-md-12" required>
<br>
<br>
<br>
<input type="submit" name="submit" class="button style-4">
                  </form>
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
