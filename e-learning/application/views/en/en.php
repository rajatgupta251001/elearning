<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			padding : 10px ;
			
		}

		#exTab1 .tab-content {
			color : white;
			background-color: #428bca;
			padding : 5px 15px;
		}

		#exTab2 h3 {
			color : white;
			background-color: #428bca;
			padding : 5px 15px;
		}

		/* remove border radius for the tab */

		#exTab1 .nav-pills > li > a {
			border-radius: 0;
		}

		/* change border radius for the tab , apply corners on top*/

		#exTab3 .nav-pills > li > a {
			border-radius: 4px 4px 0 0 ;
		}

		#exTab3 .tab-content {
			color : white;
			background-color: #428bca;
			padding : 5px 15px;
		}





		

		
	</style>
</head>
<body>




	<div class="container"><h2>EN </h2></div>
	<div id="exTab3" class="container">	
		<ul  class="nav nav-pills">
			<li class="active">
				<a  href="#1b" data-toggle="tab">document</a>
			</li>
			<li><a href="#2b" data-toggle="tab">video</a>
			</li>
			<li><a href="#3b" data-toggle="tab">faculty video upload</a>
			</li>
			<li><a href="#4b" data-toggle="tab">faculty document upload</a>
			</li>
		</ul>

		<div class="tab-content clearfix">
			<div class="tab-pane active" id="1b">

				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr>
								<th>sno</th>
								<th>title</th>
								<th>type</th>
								<th>faculty name</th>
								<th>date</th>
								<th>view</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$m=1;
							foreach($en_video1 as $aaaa) {?>
							<tr>
								<td><?php echo $m++;?></td>
								<td><?php echo $aaaa->title;?></td>
								<td><?php echo $aaaa->type;?></td>
								<td><?php echo $aaaa->uploadname;?></td>
								<td><?php echo $aaaa->date;?></td>
								<td><?php echo $aaaa->views;?></td>
								
								
							</tr>

							<?php }?>
						</tbody>
					</table>
				</div>

			</div>
			<div class="tab-pane" id="2b">
				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr><th>sno</th>
								<th>title</th>
								<th>type</th>
								<th>faculty name</th>
								<th>date</th>
								<th>view</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$k=1;
							foreach($en_document1 as $aaa) {?>
							<tr>
								<td><?php echo $k++;?></td>
								<td><?php echo $aaa->topic;?></td>
								<td><?php echo $aaa->videotype;?></td>
								<td><?php echo $aaa->uploadname;?></td>
								<td><?php echo $aaa->date;?></td>
								<td><?php echo $aaa->views;?></td>
								
								
							</tr>

							<?php }?>
						</tbody>
					</table>
				</div>
			</div>


			<div class="tab-pane" id="3b">
				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr>
								<th>sno</th>
								<th>Facultyname</th>
								<th>upload video</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($en_video as $a) {?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $a->email;?></td>
								<td><?php echo $a->upload;?></td>
								
								
							</tr>

							<?php }?>
						</tbody>
					</table>
				</div>
			</div>







			<div class="tab-pane" id="4b">
				<div class="table-responsive">          
					<table class="table">
						<thead>
							<tr>
								<th>sno</th>
								<th>Facultyname</th>
								<th>upload video</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$j=1;
							foreach($en_document as $aa) {?>
							<tr>
								<td><?php echo $j++;?></td>
								<td><?php echo $aa->email;?></td>
								<td><?php echo $aa->upload;?></td>
								
								
							</tr>

							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

</body>
</html
