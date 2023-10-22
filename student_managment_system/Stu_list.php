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
	<head><title>stu_list</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
		.b1{
	background-image:url('asset/images/it.jpg');
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
    background-color: #1f293bd1;
    color: white;
    padding-left: 646px;
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
button{
	color:white;
	background-color:green;
	margin-left:30px;
}
	</style>
	</head>
	<body>
	<div class="container-fluid">
	<div class="row t2">
	<div class="col-md-12">
	<span>Student Record</span>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<button type="submit" style="background-color:red; font-size:23px;"><a href="ad_student.php">Add student</a></button>
	<button type="submit" style="background-color:red; font-size:23px;"><a href="ad_studepartli.php">Department</a></button>
	<table border="1" class="t1">
	<tr>
	<td>Sr.N</td>
	<td>Name</td>
	<td>Email</td>
	<td>Department</td>
	<td>password</td>
	<td>result</td>
	<td>attendence</td>
	<td>edit</td>
	<td>Delete</td>
	</tr>
	<?php
	$q="SELECT * FROM tb_stu_reg";
// echo'<pre>';print_r($q);
	$q=mysqli_query($c,$q);
	$i = 1;
	$v1=mysqli_fetch_assoc($q);
	// echo'<pre>';print_r($v1);die;
	while($v1=mysqli_fetch_assoc($q)){
		echo'<tr>';
		echo'<td width=100>'.$i.'</td>';
		echo'<td width=200>'.$v1["name"].'</td>';
		echo'<td width=200>'.$v1["email"].'</td>';
		echo'<td width=200>'.$v1["depart"].'</td>';
		echo'<td width=200>'.$v1["pass"].'</td>';
		echo'<td width=200>'.$v1["result"].'<button type="submit"><a href="result.php?sid='.$v1["id"].'">add</a></button></td>';
		echo'<td width=200>'.$v1["attend"].'<button type="submit"><a href="attendence.php?sid='.$v1["id"].'">add</a></button></td>';

		echo'<td width=200><a href="stu_listup.php?sid='.$v1["id"].'">edit</a></td>';
		echo'<td width=200><a href="stu_listde.php?sid='.$v1["id"].'">Delete</a></td>';

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