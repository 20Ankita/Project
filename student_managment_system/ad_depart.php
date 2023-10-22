<?php
$c=mysqli_connect('localhost','root','','db_sms');
// if($c)
// {
	// echo'connected';
// }
// else
// {
	// echo
// }
$q="SELECT * FROM tb_depart";
$v=mysqli_query($c,$q);
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ad Department</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="../bootstrap3/css/bootstrap.min.css"> -->
		<!-- <script src="../jquery2/jquery.min.js"></script> -->
		<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
		<script src="asset/jquery2/jquery.js"></script>
		<!-- <script src="jquery2/jquery-1.10.2.js"></script>-->
		<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
		<style>
		body{
			overflow-y:hidden;
		}
		.img{
			background-image:url('asset/images/lib.jpg');
			background-size:100% 100%;
		}
		.t1 {
			background-color: #222215;
			color: white;
			padding-left:667px;
			padding-top:20px;
			font-size: 51px;
			font-weight: bold;
		}
		.t2{
			background-color:white;
			color:black;
			width:60%;
			border-radius:19px;
			text-align:center;
			margin:59px 0px 473px 321px;
			padding:0px 0px 0px 0px;
			font-size:25px;
		}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t1">
	<div class="col-md-12">
	<p>Admin Department</p>
	</div>
	</div>
	</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 img">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
		<!--<button type="submit"class="btn btn-success btn-lg bt2" name="submit">ADD COURSE</button>-->	
		<button type="submit"class="btn btn-success btn-lg bt2" name="submit"><a href="add_depart.php" style="color:white;">ADD</a></button>
	<form>
	<table border="1" class="t2">
		<tr>
		<td>Sr.N</td>
		<td>Department</td>
		<td>Details</td>
		<td>Update</td>
		<td>Delete</td>
		</tr>
		<?php
		$i = 1;
		while($v2=mysqli_fetch_assoc($v)){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$v2["depart"].'</td>';
		echo'<td><a href="ad_editdepart.php?diid='.$v2["id"].'">add details</a></td>';
		echo'<td><a href="ad_updepart.php?uid='.$v2["id"].'">update</a></td>';
		echo'<td><a href="ad_departde.php?diide='.$v2["id"].'">Delete</a></td>';
		// echo'<td><button type="submit"><a href="ad_sylb.php?sem='.$v2["id"].'">add</a></button></td>';
		echo'<tr>';
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