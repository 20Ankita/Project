 <?php
 $c=mysqli_connect('localhost','root','','db_sms');
 // if($c)
// {
	// echo'connected';
// }
// else{
	// echo'not';
// }
?>
<!DOCTYPE html>
<html>
	<head><title>Sign</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/bootstrap4/css/bootstrap.min.css">
	<script src="asset/jquery2/jquery.js"></script>
	<script src="asset/jquery2/jquery-1.10.2.js"></script>
	<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
	<style>
	.t2 {
    background-color:#203927;
    color: white;
    padding-left:672px;
	padding-top:20px;
    font-size: 51px;
    font-weight: bold;
	}
	.b1{
	background-image:url('asset/images/de2.jpg');
	background-size:100% 100%;
	opacity:0.9;
	}
	.t1{
	background-color:black;
	opacity:0.8;
	color:white;
	width:80%;
	margin:59px 0px 373px 171px;
	padding:0px 0px 0px 0px;
	font-size:20px;
	}
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
	<p>Student Details</p>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<table border="1" class="t1">
	<tr>
	<td>Sr.N</td>
	<td>First Name</td>
	<td>Last name</td>
	<td>Father name</td>
	<td>Mother name</td>
	<td>gender</td>
	<td>Email</td>
	<td>dob</td>
	<td>Nationality</td>
	<td>Phone.No:</td>
	<td>Department</td>
	<td>Delete</td>
	</tr>
	<?php
	$v="SELECT * FROM tb_reg";
	$v1=mysqli_query($c,$v);
		// echo'<pre>';print_r($v1);die;
	// if($v1){
		// echo'connected';
	// }
	// else{
		// echo'not connected';
	// }
	$i = 1;
	while($v2=mysqli_fetch_assoc($v1)){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$v2["fname"].'</td>';
		echo'<td>'.$v2["lname"].'</td>';
		echo'<td>'.$v2["faname"].'</td>';
		echo'<td>'.$v2["moname"].'</td>';
		echo'<td>'.$v2["gender"].'</td>';
		echo'<td>'.$v2["email"].'</td>';
		echo'<td>'.$v2["dob"].'</td>';
		echo'<td>'.$v2["nationality"].'</td>';
		echo'<td>'.$v2["pn"].'</td>';
		echo'<td>'.$v2["department"].'</td>';
		echo'<td><button type="submit"><a href="stude_reg.php?uid='.$v2['id'].'">delete</a></button></td>';
		echo'<tr>';
			$i++;
	}
	?>
	</table>
	</div>
	</div>
	</div>
	</body>
	</html>