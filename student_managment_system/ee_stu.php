<?php 
$c=mysqli_connect('localhost','root','','db_sms');
// if($c){
	// echo'connected';die;
	// }
	// else{
	// echo' not connected';die;
	// }


?>
<!DOCTYPE html>
<html>
	<head><title>ee_stu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.b1{
	background-image:url('asset/images/ee.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t1{
	background-color:black;
	opacity:0.8;
	color:white;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	.t2 {
    background-color: #3e5042;
    color: white;
    padding-left: 579px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
a{
	color:white;
	text-decoration:none;
}
a:hover{
	color:white;
	text-decoration:none;
}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<b>Electrical engineering</b>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<table border="1" class="t1">
	<tr>
	<td>Sr.N</td>
	<td>NAME</td>
	<td>Email</td>
	<td>DEpartment</td>
	<td>sign in</td>
	</td>
	<?php
	$q="SELECT * FROM tb_stu_reg WHERE depart='ee'";
// echo'<pre>';print_r($q);
	$q=mysqli_query($c,$q);
	$i = 1;
	while($v1=mysqli_fetch_assoc($q)){
		echo'<tr>';
		echo'<td width=100>'.$i.'</td>';
		echo'<td width=200>'.$v1["name"].'</td>';
		echo'<td width=200>'.$v1["email"].'</td>';
		echo'<td width=200>'.$v1["depart"].'</td>';
		echo'<td width=200><a href="student_login.php">Sign In</a></td>';
		echo'</tr>';
		$i++;
	}
	?>
	</table>
	</div>
	</div>
	</div>
	</body>
</html>