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
// echo'<pre>';print_r($c);die;

if(isset($_POST['submit'])){
	$holiday=$_POST['holiday'];
	$date=$_POST['date'];
	$week=$_POST['week'];
	$v="INSERT INTO tb_holiday(holiday,date,week)VALUES('$holiday','$date','$week')";
	// echo'<pre>';print_r($v);die;
	$v1=mysqli_query($c,$v);
	header('location:ad_holidayli.php');
}
?>
<!DOCTYPE html>
<html>
	<head><title>ad_about</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	body{
		overflow-y:hidden;
	}
	.b1{
	background-image:url('asset/images/de.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t2 {
    background-color: #1f293bd1;
    color: white;
    padding-left: 735px;
	padding-top:20px;
    font-size: 51px;
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
    padding: 38px 25px 10px 26px;
    margin: 67px 329px 10px 358px;
    font-size: 20px;
	}
	
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Holiday</span>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 b1">
			<form name="name" method="post" class="frm1">
			<table border="1" style="width:100%;";>
			<tr>
				<td style="text-align:center;">Enter Holidays</td>
				<td><input type="text" name="holiday" style="width:100%;"> </td>
			</tr>
			<tr>
				<td style="text-align:center;">Enter date</td>
				<td><input type="text" name="date" style="width:100%;"> </td>	
			</tr>
			<tr>
				<td style="text-align:center;">Enter week</td>
				<td><input type="text" name="week" style="width:100%;"> </td>	
			</tr>
			</table>
			<tr>
			<td><button type="submit" class="btn btn-success btn-lg" name="submit" style="margin-left:450px";>submit</button></td>
			</tr>
			</form>
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">	
		<center style="color:black; font-size:20px; margin-top:500px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
</body>
</html>