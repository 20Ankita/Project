<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	if(isset($_POST['submit'])){
	$q="SELECT *FROM tb_stu_reg";
	// echo'<pre>';print_r($q);die;
	$u=mysqli_query($c,$q);
	$v2=mysqli_fetch_assoc($u);
	
		// echo$v2["email"];
		
		
		$name=$_POST['name'];
		// echo'<pre>';print_r($name);
		$email=$_POST['email'];
		// echo'<pre>';print_r($email);
		$depart=$_POST['depart'];
		// echo'<pre>';print_r($depart);
		$pass=$_POST['pass'];
		// echo'<pre>';print_r($pass);
		
	
	
	while($v2=mysqli_fetch_assoc($u)){
		$em = $v2['email'];
	}
	
	
	if($em == $email)
		{
			echo '<script>alert("email already exist");</script>';
		}else{
	
	
	
	$v="INSERT INTO tb_stu_reg(name,email,depart,pass)VALUES('$name','$email','$depart','$pass')";
		// echo'<pre>';print_r($v);die;
	$v1=mysqli_query($c,$v);
	// echo'<pre>';print_r($v1);die;
	
	if($v1){
		header('location:stu_portal.php');
	}else{
		echo '<script>alert("you are no registered. there are some problem.");</script>';
	}
		
	}
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Student</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	
	<style>
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
    padding: 48px 0px 30px 109px;
    margin: 80px 525px 162px 562px;
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
    margin: 35px 340px 0px 340px;
    
    padding: 20px 0px 10px 365px;
	}
	.bt2{
		margin:20px 0px 0px 118px;
		
	}
	a{
		color:white;
		text-decoration:none;
	}
	a:hover{
		color:white;
	}
	form .error{
		color:red;
		}
	</style>
	<body>
	<div class="container-fluid ">
		<div class="row">
		<div class="col-md-12 a1">
			<p class="a2">Register Here</p>
			<form method="post" name="frm1" class="frm1">
			<label for="name" style="padding-left:98px; font-size:21px;"><b>Student Name</b></label><br>
				<input  type="text" name="name"id="name" style="width:75%;"><br>
			<label for="email" style="padding-left:87px; font-size:21px;"><b>Student Email Id</b></label><br>
				<input  type="email" name="email"  id="email" style="width:75%;" ><br>
			<label for="year" style="padding-left:112px; font-size:21px;"><b>Department</b></label><br>
				
				<select style="width:75%;" name="depart">
								<option value="b.t">--select--</option>
								<option value="it">Information Technology</option>
								<option value="cse">Computer Science Engineering.</option>
								<option value="ee">Electrical Engineering</option>
								<option value="me">Mechanical Engineering</option>
				</select>
			<label for="pass" style="padding-left:115px; font-size:21px;"><b>Password</b></label><br>
				<input  type="password" name="pass"  id="pass" style="width:75%;"><br>
			<button type="submit"class="btn btn-success btn-lg bt2" name="submit">Register</button>	
		</form>
		
	<script>
		$(function(){
			$("form[name='frm1']").validate({
				rules:{
					name:"required",
					depart:"required",
					email:{
					required:true,
					email:true
					},
				pass:{
					required:true,
					minlength:8
					}
				},
				messages:{
					name:"plz enter your name",
					depart:"plz select one",
				
				pass:{
					required:"plz provide password",
					minlength:"your password must be at least 8character long",
					},
				email:"please enter a valid email address"
				
				},
				submitHandler:function(form){
				form.submit();
				}
			});
		});
		</script>
	</div>
	</div>
	</div>
	</body>
<html>