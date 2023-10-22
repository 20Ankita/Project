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
	background-image:url('asset/images/co.jpg');
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
	<span>Manage Contact Us</span>
	</div>
	</div>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-12 b1">
	<form name="name" method="post" class="f1" enctype="multipart/form-data">
	<table border="1" class="t1">
		<button type="button" class="btn btn-success btn-lg" style="margin-left:171px; margin-top:30px;"><a href="ad_contact.php">Add contact</a></button>

	<tr>
	<td>Sr.N</td>
	<td>Name of Faculty</td>
	<td>Fax No</td>
	<td>Email-id</td>
	<td>delete</td>
	</tr>
	<?php
	$v="SELECT * FROM tb_contact";
	$v1=mysqli_query($c,$v);
		$i = 1;
		while($v2=mysqli_fetch_array($v1)){
		echo'<tr>';
		echo'<td>'.$i.'</td>';
		echo'<td>'.$v2["name"].'</td>';
		echo'<td>'.$v2["fax"].'</td>';
		echo'<td>'.$v2["email"].'</td>';
		echo'<td><a href="ad_contactde.php?cid='.$v2["id"].'">Delete</a></td>';
		echo'</tr>';
		$i++;
		}
		?>
	</table>
	</form>
	</div>
	</div>
	</div>
	</body>
</html>