<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c)
// {
	// echo'connected';
// }
// else
// {
	// echo'
$q="SELECT * FROM tb_course";
$v=mysqli_query($c,$q);
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
	background-image:url('asset/images/lib.jpg');
	background-size:100% 100%;
	}
		

.t1 {
    background-color: #222215;
    color: white;
    padding-left: 736px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.t2{
	background-color:black;
	opacity:0.6;
	color:white;
	width:50%;
	margin:59px 0px 73px 501px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Manage Course</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<button type="submit"class="btn btn-success btn-lg bt2" name="submit"><a href="ad_addcourse.php">ADD COURSE</a></button>
	<form method="post" name="frm">
	<table border="1" class="t2">
		<tr>
		<td>Sr.N</td>
		<td>Course</td>
		
		</tr>
		<?php
		$i = 1;
		while($v2=mysqli_fetch_assoc($v)){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$v2["course"].'</td>';
		

		echo'<tr>';
		$i++;
		}
		?>
	</table>	
	</form>		
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
</div>	
	</body>
	</html>