<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c)
// {
	// echo'connected';
// }
// else{
	// echo'not';
// }
	
	$courseid=$_GET['crsid'];
	$sylb=$_GET['sylb'];
?>	
<!DOCTYPE html>
<html>
	<head><title>It </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/jquery2/jQuery.Validate.min.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	
	<style>
	.b1{
	background-image:url('asset/images/it1.jpg');
	background-size:100% 100%;
	}
	.t2 {
    background-color: #404040;
    color: white;
    padding-left: 513px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
.t1{
	background-color:white;
	opacity:0.8;
	color:black;
	width:50%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<p>Admin syllabus</p>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	
	
	</div>
	</div>
	</div>
	
</html>
