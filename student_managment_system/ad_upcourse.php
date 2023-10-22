<?php
$c=mysqli_connect('localhost','root','','db_frm');

	$course1 = $_GET['course'];
	// echo'<pre>';print_r($id);die;
	
	
		$q="SELECT * FROM tb_course WHERE id='$course1'";
		$v=mysqli_query($c,$q);
		// echo'<pre>';print_r($v);die;
		$v1=mysqli_fetch_array($v);
		// echo'<pre>';print_r($v1);die;
		if(isset($_POST['submit']))
		{
		$course=$_POST['course'];
		// echo'<pre>';print_r($name);
		$q1="UPDATE tb_course SET  course='$course' WHERE  id='$course1'";
		$v2=mysqli_query($c,$q1);
		echo'<pre>';print_r($v2);die;
	
		}
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>ADD COURSE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css"> -->
		<!-- <script src="../jquery2/jquery.min.js"></script> -->
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<!-- <script src="jquery2/jquery-1.10.2.js"></script>-->
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		.img{
	background-image:url('asset/images/lib.jpg');
	background-size:100% 100%;
	}
	body{
		overflow-y:hidden;
	}
	.t1 {
    background-color: #222215;
    color: white;
    padding-left: 649px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.frm{
	color:white;
	background-color:black;
	opacity:0.8;
	background-size: 100% 100%;
    border: solid black 2px;
    line-height: 1.5;
    border-radius: 9px;
    padding: 48px 0px 30px 20px;
    margin: 220px 525px 342px 520px;
    font-size: 20px;
	}
	</style>
	</head>
	<body>
<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Manage Course</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
	<form method="post" name="one" class="frm">
	<table border="1">
	<tr>
	<td><label> course</label></td>
	<td><input type="text" name="course" value="<?php echo $v1['course']; ?>"></td>
	<td><label>sem</label></td>
	<td><input type="text" name="sem" 	></td>
	</tr>
	<tr>
	<td colspan="4" style="padding-left:250px;"><input type="submit" name="sb"></td>
	</tr>
	</table>
	</form>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">	
	<center style="color:white; font-size:20px; margin-bottom:14px;"><b>2022 Student login form .All rights  reserved .Design by Ankita .</b></center>
	</div>
	</div>
	</div>
</div>
</div>
</div>	
	</body>
	</html>
		