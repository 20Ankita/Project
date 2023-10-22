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
	$name=$_POST['name'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
$v="INSERT INTO tb_contact(name,fax,email)VALUES('$name','$fax','$email')";
// echo'<pre>';print($v);die;
$q=mysqli_query($c,$v);
header('location:ad_contactli.php');
}
?>
<!DOCTYPE html>
<html>
	<head><title>stu_list</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
		.b1{
	background-image:url('asset/images/co.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t1{
	background-color:black;
	opacity:0.8;
	color:white;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	.t2 {
    background-color: #1f293bd1;
    color: white;
    padding-left: 646px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
a{
	color:white;
	text-decoration:none;
}
a:hover{
	color:white;
	text-decoration:none;
}
button{
	color:white;
	background-color:green;
	margin-left:30px;
}
	.frm1{
	color:white;
	background-color:black;
	opacity:0.8;
	background-size: 100% 100%;
    border: solid black 2px;
    line-height: 1.5;
    border-radius: 9px;
    padding: 68px 0px 60px 38px;
    margin: 140px 533px 260px 601px;
    font-size: 20px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<span>Manage Contact Us</span>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<form name="name" method="post" class="frm1">
	<table>
	<tr>
	<td><label>Enter name of faculty</label></td>
	<td><input type="text" name="name" ></td>
	</tr>
	<tr>
	<td><label>Enter the Fax no</label></td>
	<td><input type="text" name="fax"></td>
	</tr>
	<tr>
	<td><label>Enter the Email id</label></td>
	<td><input type="text" name="email"></td>
	</tr>
	<tr>
	<td colspan="2">
	<button type="submit" class="btn btn-success btn-lg" name="submit"style="margin-left:171px; margin-top:30px;">submit</button>
	</td>
	</tr>
	</table>
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
</html>