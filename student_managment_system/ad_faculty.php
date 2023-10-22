<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	$dpid = $_GET['deprtid'];
	if(isset($_POST['submit'])){
		$departid=$_POST['departid'];
		$name=$_POST['name'];
		$desig=$_POST['desig'];
		$contact=$_POST['contact'];
		$v="INSERT INTO  tb_faculty(departid,name,desig,contact)VALUES('$departid','$name','$desig','$contact')";
		// echo'<pre>';Print_r($v);
		$v1=mysqli_query($c,$v);
		header('location:ad_faclist.php');
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Feedback</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<script src="asset/jquery2/jquery-1.10.2.js"></script>
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		.b1{
		background-image:url('asset/images/feedback.jpg');
		background-size:100% 100%;
		opacity:0.9;
		}
		.t2 {
		background-color: #8e603b;
		color: white;
		padding-left: 686px;
		font-size: 70px;
		font-weight: bold;
		}
		.frm1{
		color:white;
		background-color:black;
		opacity:0.8;
		background-size: 100% 100%;
		border: solid black 2px;
		line-height: 1.5;
		border-radius: 9px;
		padding: 33px 32px 33px 24px;
		margin: 100px 517px 211px 530px;
		font-size: 20px;
		}
		</style>
	</head>
		<body>
		<div class="container-fluid">
			<div class="row t2">
				<div class="col-md-12">
				<span>Faculty</span>
				</div>
			</div>
		</div>
			<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 b1">
				<form name="name" method="post" class="frm1">
				<table border="1" style="width:100%";>
				<tr>
				<td>DEPARTMENT ID</td>
				</tr>
				<tr>
				<td><input type="text" name="departid" style="width:100%;" value="<?php echo $dpid ;?>"></td>
				</tr>
				<tr>
				<td>Name</td>
				</tr>
				<tr>
				<td><input type="text" name="name" style="width:100%;"></td>
				</tr>
				<tr>
				<td>designation</td>
				</tr>
				<tr>
				<td><input type="text" name="desig" style="width:100%;"></td>
				</tr>
				<tr>
				<td>phone number</td>
				</tr>
				<tr>
				<td><input type="text" name="contact" style="width:100%;"></td>
				</tr>
				<tr>
				<td><button type="submit" class="btn btn-success btn-lg" name="submit" style="margin-left:234px;">Submit</button></td>
				</tr>
				</table>
				</form>
			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">	
			<center style="color:black; font-size:25px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
			</div>
			</div>
			</div>
			</div>
			</div>
		</div>
	</body>
</html>