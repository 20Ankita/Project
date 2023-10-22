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
	$v = "SELECT * FROM tb_depart";
	$v1 = mysqli_query($c,$v);
	// echo'<pre>';print_r($v2);die;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student managment system</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css"> -->
		<!-- <script src="../jquery2/jquery.min.js"></script> -->
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<!-- <script src="jquery2/jquery-1.10.2.js"></script>-->
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		.img{
	background-image:url('asset/images/de.jpg');
	background-size:100% 100%;
	}
		

	.t1 {
		background-color:#550f19db;
		color: white;
		padding-left: 696px;
		padding-top:20px;
		font-size: 51px;
		font-weight: bold;
	}
		.one{
			background-color:black;
			opacity:0.8;
			color:white;
			font-weight:bold;
			font-size:29px;
			border:solid black 2px;
		    padding: 54px 14px 54px 97px;
			margin: 93px 95px 80px 248px;
		}
		.two{
			background-color:black;
			opacity:0.8;
			color:white;
			font-weight:bold;
			font-size:27px;
			border:solid black 2px;
			padding: 54px 14px 54px 99px;
			margin: 93px 248px 80px 95px;	
		}	
		.bt1{
		margin: 17px 0px 0px 60px;
		padding: 12px 21px 12px 23px;
		}
		a{
			color:white;
			text-decoration:none;
		}
		a:hover{
			color:white;
		}
		.bt2{
		margin: 17px 0px 0px 57px;
		padding: 12px 21px 12px 23px;
		}
		</style>
	</head>
<body>
	<div class="container-fluid">
		<div class="row t1">
		<div class="col-md-12">
		<p>Department</p>
		</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 img">
			<div class="container-fluid">
				<div class="row">
					<?php
						$i = 1;
						while($v2 = mysqli_fetch_array($v1)){
							echo '
							<div class="col-md-6 a1">
							<div class="one">
							Department of ('.$v2['depart'].')
							<button type="button" class="btn btn-success btn-lg bt1"><a href="stu_depart_view.php?did='.$v2['id'].'">Click here</a></button>
							</div>
							</div>';
						}
					?>
				</div>
			</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">	
					<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>