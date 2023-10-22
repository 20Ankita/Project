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
if( isset($_POST['sb']))
{
	$course=$_POST['course'];
	echo'<pre>';print_r($course);
	$sem=$_POST['sem'];
	echo'<pre>';print_r($course);
$v="INSERT INTO tb_course(course)VALUE('$course')";
	// echo'<pre>';print_r($v);die;

$q=mysqli_query($c,$v);
	header('location:add_syllabus.php');
exit;
 
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
	
	background-size: 100% 100%;
    border: solid black 2px;
    line-height: 1.5;
    border-radius: 9px;
    padding: 48px 0px 30px 120px;
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
	<td><input type="text" name="course" style="width:300px;"></td>
	<!-- <td><label>sem</label></td>
	<td><input type="text" name="sem"></td>-->
	</tr>
	<!--<tr>
	<td><label> Department name</label></td>
	<td><input type="text" name="dname" style="width:300px;"></td>
	</tr>-->
	<tr>
	<td colspan="2" style="padding-left:150px;"><input type="submit" name="sb"></td>
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