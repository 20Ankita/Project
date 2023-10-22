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
	<head><title>it_stu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.b1{
	background-image:url('asset/images/it1.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t1{
	background-color:white;
	opacity:0.6;
	color:black;
	width:80%;
	margin:59px 0px 73px 171px;
	padding:0px 0px 0px 0px;
	font-size:25px;
	}
	.t2 {
    background-color: #404040;
    color: white;
    padding-left: 500px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
}
a{
	color:black;
	text-decoration:none;
}
a:hover{
	color:black;
	text-decoration:none;
}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<b>Computer Science and Engineering</b>
	</div>
	</div>
	</div>
	
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<table border="1" class="t1" >
	<tr>
	<td>Sr.N</td>
	<td>NAME</td>
	<td>Email</td>
	<td>Department</td>
	<td>sign in</td>
	</td>
	<?php
	$q="SELECT * FROM tb_stu_reg WHERE depart='cse'";
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