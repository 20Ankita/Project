<?php
$c=mysqli_connect('localhost','root','','db_sms');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$comment=$_POST['comment'];
$v="INSERT INTO  tb_fdb(name,email,contact,comment)VALUES('$name','$email','$contact','$comment')";
// echo'<pre>';Print_r($v);
$v1=mysqli_query($c,$v);
header('location:index.php');
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
	body{
		overflow-y:hidden;
		overflow-x:hidden;
	}
	.container-fluid{
		padding-left:0px ;
		padding-right:0px;
	}
	.b1{
	background-image:url('asset/images/feedback.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t2 {
    background-color: #8e603b;
    color: white;
    text-align:center;
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
    padding: 100px 515px 33px 530px;
    
    font-size: 20px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row t2">
			<div class="col-md-12">
			<span>Feedback </span>
			</div>
		</div>
	</div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 b1">
			<form name="name" method="post" class="frm1">
			<table border="1" style="width:100%; border-width:6px;">
			<tr>
			<td>Name</td>
			</tr>
			<tr>
			<td><input type="text" name="name" style="width:100%;"></td>
			</tr>
			<tr>
			<td>Email</td>
			</tr>
			<tr>
			<td><input type="email" name="email" style="width:100%;"></td>
			</tr>
			<tr>
			<td>contact no</td>
			</tr>
			<tr>
			<td><input type="text" name="contact" style="width:100%;"></td>
			</tr>
			<tr>
			<td>Comments</td>
			</tr>
			<tr>
			<td><textarea name="comment" cols="70" rows="4" > </textarea>
			</tr>
			<tr>
			<td><button type="submit" class="btn btn-success btn-lg" name="submit" style="margin-left:280px;">Submit</button></td>
			</tr>
			</table>
			<div class="container-fluid">
			<div class="row">
			<div class="col-md-12">	
			<center style="color:white; font-size:25px; margin-bottom:140px; margin-top:50px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
			</div>
			</div>
			</div>
			</form>
		
		</div>
		</div>
		</div>
	</body>
</html>