<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c)
	// {
		// echo'connected';
	// }
	// else
	// {
		// echo'not connected';
	// }
	$id=$_GET['sid'];
	$v="SELECT * FROM tb_sylb WHERE courseid='$id'";
	$q=mysqli_query($c,$v);
	$v1=mysqli_fetch_array($q);
	// echo'<pre>';print_r($v);die;
?>
<!DOCTYPE html>
<html>
	<head><title>cse syllabus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-x:hidden;
	}
	.t1 {
		background-color: #1d3c59;
		color: white;
		text-align:center;
		padding-top:20px;
		font-size: 51px;
		font-weight: bold;
	}
	.a1{
	background-image:url('asset/images/depart.jpg');
	background-size:100% 100%;
	}
	.frm1{
		background-color:black;
		opacity:0.8;
		color:white;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		border-radius: 9px;
		font-size: 30px;
		margin:140px 395px 150px 400px;
	}
	.one{
		width:100%;
	}
	a{
		color:white;
	}
	a:hover{
		color:white;
	}
	td{
		text-align:center;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t1">
			<div class="col-md-12">
			<p>Syllabus of  <?php echo $v1['coursename']; ?></p>
			</div>
		</div>
	</div>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-12 a1">
				<form method="post" name="frm1" class="frm1" enctype="multipart/form-data">
					<table border="1" class="one">
						<?php
							$v1="SELECT * FROM tb_sylb";
							// echo'<pre>';print_r($v1);
							$q1=mysqli_query($c,$v1);
								// echo'<pre>';print_r($q1);
							$v2=mysqli_fetch_assoc($q1);
							?>
						<tr>
							<td>SEMESTER</td>
							<td>pdf</td>
						</tr>
						<tr>
							<td>1st semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['one'].'">1 sem</a>';?></td>
						</tr>
						<tr>
							<td> 2nd semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['two'].'">2 sem</a>';?></td>	
						</tr>
						<tr>
							<td>3rd semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['three'].'">3 sem</a>';?></td>
						</tr>
						<tr>
							<td> 4th semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['four'].'">4 sem</a>';?></td>
						</tr>
						<tr>
							<td> 5th semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['five'].'">5 sem</a>';?></td>
						</tr>
							<td> 6th semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['six'].'">6 sem</a>';?></td>
						</tr>
						<tr>
							<td> 7th semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['seven'].'"> 7sem</a>';?></td>
						</tr>
						<tr>
							<td> 8th semester</td>
							<td><?php echo'<a href="asset/pdf/'.$v2['eight'].'">8 sem</a>';?></td>
						</tr>
					</table>
					</form>
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">	
						<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
					</div>
				</div>
			</div>					
				</div>
			</div>
		</div>
</body>
<html>
	