<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	
	$id = $_GET['sid'];
	 // echo'<pre>';print_r($id);die;
	if(isset($_POST['submit'])){
		$attend=$_POST['attend'];
		// echo'<pre>';print_r($name);
		// $v="INSERT INTO tb_stu_reg(result)VALUES('$result')";
		$v = "UPDATE tb_stu_reg SET attend = '$attend' WHERE id = '$id'";
		// echo'<pre>';print_r($v);die;
	$v1=mysqli_query($c,$v);
	// echo'<pre>';print_r($v1);die;
	
	// if($v1){
		// echo'connected';
	// }else{
		// echo'not connected';
	// }
header('location:stu_list.php');
	exit;		
	}
?>
<!DOCTYPE html>
<html>
	<head><title>attendence</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	
	<style>
	body{
	overflow-y:hidden;
	}
		.a1{
	background-image:url('asset/images/de2.jpg');
	background-size:100% 100%;
	}
		.frm1{
	background-color:black;
	opacity:0.8;
	background-size: 100% 100%;
    border: solid black 2px;
    line-height: 1.5;
    border-radius: 9px;
    padding: 68px 0px 60px 38px;
    margin: 140px 525px 219px 562px;
    font-size: 20px;
	}
	label{
		color:white;
	}
	input{
		border-radius:9px;
	}
	.a2{
		color:white;
	background-color:black;
	opacity:0.8;
	background-size:100% 100%;
	border:solid black 2px;
	line-height: 2.5;
	border-radius:9px;
	font-size: 46px;
	font-weight:bold;
    margin: 60px 340px 160px 340px;
    
    padding: 20px 0px 10px 365px;
	}
	.bt2{
		margin:20px 0px 0px 195px;
		
	}
	a{
		color:white;
		text-decoration:none;
	}
	a:hover{
		color:white;
	}
	</style>
	<body>
	<div class="container-fluid ">
		<div class="row">
		<div class="col-md-12 a1">
			<p class="a2">Attendence</p>
			<form method="post" name="frm1" class="frm1">
			<label style="padding-left:26px; font-size:30px;"><b>Enter the attendence of student</b></label><br>
				<input  type="text" name="attend"id="attend" style="width:75%; margin-left:49px;" ><br>
			<button type="submit"class="btn btn-success btn-lg bt2" name="submit">Register</button>	
		</form>
	
	<div class="row">
	<div class="col-md-12">	
	<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
	</div>
	</div>
	</div>
	</div>
	</div>
	</body>
<html>