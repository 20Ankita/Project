<?php
	$c=mysqli_connect('localhost','root','','db_sms');
	// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		// echo'<pre>';print_r($name);
		$email=$_POST['email'];
		// echo'<pre>';print_r($email);
		$depart=$_POST['depart'];
		// echo'<pre>';print_r($depart);
		$pass=$_POST['pass'];
		// echo'<pre>';print_r($pass);
		$result=$_POST['result'];
		// echo'<pre>';print_r($result);
		$attend=$_POST['attend'];
		// echo'<pre>';print_r($attend);
		$v="INSERT INTO tb_stu_reg(name,email,depart,pass,result,attend)VALUES('$name','$email','$depart','$pass','$result','$attend')";
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
	<head><title>ad_student</title>
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
			<label for="depart" style="padding-left:112px; font-size:21px;"><b>Department</b></label><br>
				
				<select style="width:75%;" name="depart">
								<option value="b.t">--select--</option>
								<option value="it">Information Technology</option>
								<option value="cse">Computer Science Engineering.</option>
								<option value="ee">Electrical Engineering</option>
								<option value="ee">Mechanical Engineering</option>
				</select>
			<label for="pass" style="padding-left:115px; font-size:21px;"><b>Password</b></label><br>
				<input  type="password" name="pass"  id="pass" style="width:75%;"><br>
				<label for="result" style="padding-left:115px; font-size:21px;"><b>result</b></label><br>
				<input  type="text" name="result"  id="result" style="width:75%;"><br>
				<label for="attend" style="padding-left:115px; font-size:21px;"><b>attendence</b></label><br>
				<input  type="text" name="attend"  id="attend" style="width:75%;"><br>
			<button type="submit"class="btn btn-success btn-lg bt2" name="submit">Register</button>	
		</form>
		<script>
		$(function(){
			$("form[name='frm1']").validate({
				rules:{
					name:"required",
					depart:"required",
				result:{
						required:true,
						maxlength:2
					},
				attend:{
						required:true,
						maxlength:2
					},
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
					
				result:{
					required:"plz enter the result",
					maxlength:"plz enter the valid detail",
				},
				attend:{
					required:"plz enter the attendence",
					maxlength:"plz enter the valid detail",
				},
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