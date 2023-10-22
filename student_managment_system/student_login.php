<?php
$c=mysqli_connect('localhost','root','','db_sms');

	$v="SELECT * FROM tb_admin";
	$q=mysqli_query($c,$v);
	$r=mysqli_fetch_array($q);
	
	
	
	
	$user=$r['username'];
	// echo $user;
	// echo'<br>';
	$pass=$r['password'];
	// echo$pass;
	if(isset($_POST['btn']))
	{
	$u=$_POST['user'];
	$p=$_POST['pass'];
	
	
	if($u==$user && $p==$pass)
	{
	header('location:admin.php');
	}
	else
	{	
		
		$v1="SELECT result,attend FROM tb_stu_reg WHERE email='$u' AND pass='$p'";
		$r1=mysqli_query($c,$v1);

		// (mysqli_num_rows($r1)>0){
			if($v2=mysqli_fetch_assoc($r1)){
			
		// echo'<pre>';print_r($v2);die;
		
		
				$a=$v2['result'];

				$b=$v2['attend'];
				
			header('location:stu_output.php?rid='.$a.'&&aid='.$b);
		
		}
		else{
			echo'<script>alert("No  user exists")</script>';
		}
	}
	
	}
	
?>
<!DOCTYPE html>
<html>
	<head><title>Sign</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.t2 {
    background-color:#203927;
    color: white;
    padding-left:672px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
	.a1{
	background-image:url('asset/images/si.png');
	background-size:100% 100%;
	opacity:0.9;
	}
	.frm{
	background-color:black;
	opacity:0.8;
	background-size:100% 100%;
	border:solid black 2px;
	line-height: 2.5;
	<!-- padding:90px 65px 130px 66px; -->
	padding-top:90px;
	padding-bottom:60px;
    margin:  129px 250px 202px 882px;
	}
	.a2{
	margin-top:40px;
	color:white;
	font-size:30px;
	font-weight:bold;
	font-family:titillium_websemibold !important;
	}
	.a3{
	width:80%;
	padding:0px 0px 0px 26px;
	margin:20px 70px 0px 51px;
	}
	.a4{
	font-weight:bold;
	width:80%;
	padding:0px 0px 0px 0px;
	margin:40px 70px 0px 51px;
	}
	.t1{
	padding-left:148px;
	color:white;
	font-size:27px;
	font-family:titillium_websemibold !important;
	}
	
	</style>
	</head>
	<body>
		<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<p>Student Login</p>
	</div>
	</div>
	</div>
		<div class="container-fluid ">
		<div class="row">
		<div class="col-md-12 a1"> 
			<form method="post" class="frm">
				<!-- <img src="../../images/stu.2.jpeg"> -->
				
				<div class="t1">STUDENT LOGIN </div>
				<input type="text" placeholder="username" name="user" class="a3"><br>
				<input type="password" placeholder="password" name="pass" class="a3"><br>
				<input type="checkbox" name="cb" style="margin-left:50px;"><big style="color:white; margin-left:5px;">Remember me</big>
				<a href="#"><input type="submit" value="Login"  name="btn" class="a4"></a>
			</form>	
			<center style="color:black; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
		</div>
		</div>
		</div>
	</body>
</html>
