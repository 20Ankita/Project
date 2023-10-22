<?php


// header('location:Student_login.php?result='.$r=$['rid'].'&&attend='.$a=$['aid']);


?>
<!DOCTYPE html>
<html>
	<head><title>cse_stu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.img{
			background-image:url('asset/images/ad3.jpg');
			background-size:100% 100%;
		}
	.t1 {
			background-color:#a7a396;
			color: white;
			padding-left: 689px;
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
			text-align:center;
			border:solid black 2px;
			border-radius:29px;
		    padding: 62px 0px 60px 0px;
			margin: 210px 95px 300px 248px;
		}
	.two{
			background-color:black;
			opacity:0.8;
			color:white;
			font-weight:bold;
			font-size:29px;
			text-align:center;
			border:solid black 2px;
			border-radius:29px;
			padding: 62px 0px 60px 0px;
			margin: 210px 248px 300px 95px;	
		}	
	</style>
	</head>
<body>
	<div class="container-fluid">
		<div class="row t1">
			<div class="col-md-12">
				<p>Student record</p>
			</div>
		</div>
	</div>
	<div class="container-fluid">
<div class="row">
	<div class="col-md-12 img">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 a1">
					<div class="one">
						Student result<br>
						<?php
						$r=$_GET['rid'];
						echo$r;
						?>
					</div>
				</div>
				<div class="col-md-6 a2">
					<div class="two">
						Student  Attendence<br>
						<?php
						$a=$_GET['aid'];
						echo$a;
						?>
				</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">	
						<center style="color:white; font-size:20px; margin-bottom:14px;">
						<b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
