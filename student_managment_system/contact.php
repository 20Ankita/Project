<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	
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
	background-image:url('asset/images/co.jpg');
	background-size:100% 100%;
	}
		

.t1 {
  background-color:#1c2d34;
    color: white;
    padding-left: 689px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
.t2{
	background-color:black;
	opacity:0.8;
	color:white;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
		
		
		</style>
	</head>
<body>
<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Contact Us</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
<form method="post" name="frm">
<table border="1" class="t2">
	<tr>
	<td>Sr.N</td>
	<td>Name</td>
	<td>Fax</td>
	<td>Email</td>
	</tr>

	
	<?php
	$v="SELECT * FROM tb_contact";
	$v1=mysqli_query($c,$v);
	$i=1;
	while($v2=mysqli_fetch_array($v1)){
	echo'<tr>
	<td>'.$i.'</td>
	<td>'.$v2['name'].'</td>
	<td>'.$v2['fax'].'</td>
	<td>'.$v2['email'].'</td>
	</tr>';
	$i++;
	}		
	
	?>
</table>
</form>
	<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
	</div>
	</div>
	</div>
</div>
</div>
</div>
</body>
</html>