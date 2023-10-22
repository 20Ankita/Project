<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c){
	// echo'hello';
// }
// else{
	// echo'ignore';
// }
$id=$_GET['sid'];
 // echo'<pre>';print_r($id);die;
$v="SELECT * FROM tb_stu_reg where id='$id'";
$v1=mysqli_query($c,$v);
$v2=mysqli_fetch_assoc($v1);
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
		echo'<pre>';print_r($result);
		$attend=$_POST['attend'];
		echo'<pre>';print_r($attend);
	$q1="UPDATE  tb_stu_reg SET name='$name', email='$email', depart='$depart', pass='$pass',result='$result', attend='$attend' where id='$id'";
	// echo'<pre>';print_r($q1);die;
	$q2=mysqli_query($c,$q1);
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
			<form method="post" name="frm1" class="frm1" enctype="multipart/form-data">
			<label for="name" style="padding-left:98px; font-size:21px;"><b>Student Name</b></label><br>
				<input  type="text" name="name"id="name" style="width:75%;" value="<?php echo $v2 ['name']; ?>"><br>
			<label for="email" style="padding-left:87px; font-size:21px;"><b>Student Email Id</b></label><br>
				<input  type="email" name="email"  id="email" style="width:75%;" value="<?php echo $v2 ['email']; ?>" ><br>
			<label for="year" style="padding-left:112px; font-size:21px;"><b>Department</b></label><br>
				
				<select style="width:75%;" name="depart">
								<option value="b.t" <?php if($v2['depart']=='b.t'){echo'selected';} ?>>--select--</option>
								<option value="it" <?php if($v2['depart']=='it'){echo'selected';}?>>Information Technology</option>
								<option value="cse" <?php if($v2['depart']=='cse'){echo'selected';}?>>Computer Science Engineering.</option>
								<option value="ee" <?php if($v2['depart']=='ee'){echo'selected';}?>>Electrical Engineering</option>
								<option value="me" <?php if($v2['depart']=='me'){echo'selected';}?>>Mechanical Engineering</option>
				</select>
			<label for="pass" style="padding-left:115px; font-size:21px;"><b>Password</b></label><br>
				<input  type="password" name="pass"   style="width:75%;" value="<?php echo $v2 ['pass']; ?>"><br>
				<label for="result" style="padding-left:115px; font-size:21px;"><b>result</b></label><br>
				<input  type="text" name="result"   style="width:75%;" value="<?php echo $v2 ['attend']; ?>"><br>
				<label for="attend" style="padding-left:115px; font-size:21px;"><b>attendence</b></label><br>
				<input  type="text" name="attend"  style="width:75%;" value="<?php echo $v2 ['attend']; ?>"><br>
			<button type="submit"class="btn btn-success btn-lg bt2" name="submit">Register</button>	
		</form>
	</div>
	</div>
	</div>
	</body>
<html>