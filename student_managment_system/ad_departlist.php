<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c)
// {
	// echo'connected';
// }
// else
// {
	// echo'
	
$q="SELECT * FROM tb_departli";
$v=mysqli_query($c,$q);
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Department list</title>
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
		

.t1 {
    background-color: #222215;
    color: white;
    padding-left: 736px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.t2{
	background-color:black;
	opacity:0.6;
	color:white;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Department list</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
	<form method="post" name="frm">
	<table border="1" class="t2">
		<tr>
		<td>Sr.N</td>
		<td>Department id</td>
		<td>Department List</td>
		<td>President Pic</td>
		<td>President name</td>
		<td>President Des</td>
		<td>HOD pic</td>
		<td>HOD name</td>
		<td>HOD Des</td>
		<td>Faculty Count</td>
		<td>delete</td>
		</tr>
		<?php
		$i = 1;
		while($v2=mysqli_fetch_assoc($v)){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$v2["departid"].'</td>';
		echo'<td>'.$v2["dename"].'</td>';
		echo'<td>'.$v2["prepic"].'</td>';
		echo'<td>'.$v2["prenm"].'</td>';
		echo'<td>'.$v2["predes"].'</td>';
		echo'<td>'.$v2["hodpic"].'</td>';
		echo'<td>'.$v2["hodnm"].'</td>';
		echo'<td>'.$v2["hoddes"].'</td>';
		echo'<td>'.$v2["fcltcnt"].'</td>';
		echo'<td><a href="ad_departlistde.php?did='.$v2["id"].'">Delete</a></td>';

		echo'</tr>';
		$i++;
		}
		?>
	</table>	
	</form>		
	</div>
	</div>
	</div>
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